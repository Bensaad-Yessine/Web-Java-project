<?php

namespace App\Repository;

use App\Entity\Conversation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Conversation>
 */
class ConversationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Conversation::class);
    }

    /**
     * Find or create a conversation between two users
     */
    public function findOrCreateConversation(User $user1, User $user2): Conversation
    {
        $conversation = $this->createQueryBuilder('c')
            ->andWhere('(c.user1 = :user1 AND c.user2 = :user2) OR (c.user1 = :user2 AND c.user2 = :user1)')
            ->setParameter('user1', $user1)
            ->setParameter('user2', $user2)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$conversation) {
            $conversation = new Conversation();
            $conversation->setUser1($user1);
            $conversation->setUser2($user2);

            $entityManager = $this->getEntityManager();
            $entityManager->persist($conversation);
            $entityManager->flush();
        }

        return $conversation;
    }

    /**
     * Get all conversations for a user, ordered by most recent
     */
    public function findByUser(User $user, int $limit = 50)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.user1 = :user OR c.user2 = :user')
            ->setParameter('user', $user)
            ->orderBy('c.updatedAt', 'DESC')
            ->addOrderBy('c.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get conversation between two specific users
     */
    public function findBetweenUsers(User $user1, User $user2): ?Conversation
    {
        return $this->createQueryBuilder('c')
            ->andWhere('(c.user1 = :user1 AND c.user2 = :user2) OR (c.user1 = :user2 AND c.user2 = :user1)')
            ->setParameter('user1', $user1)
            ->setParameter('user2', $user2)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
