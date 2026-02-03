<?php

namespace App\Tests\Controller;

use App\Entity\Classe;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ClasseControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $classeRepository;
    private string $path = '/classe/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->classeRepository = $this->manager->getRepository(Classe::class);

        foreach ($this->classeRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Classe index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first()->text());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'classe[nom]' => 'Testing',
            'classe[niveau]' => 'Testing',
            'classe[anneeuniversitaire]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->classeRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Classe();
        $fixture->setNom('My Title');
        $fixture->setNiveau('My Title');
        $fixture->setAnneeuniversitaire('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Classe');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Classe();
        $fixture->setNom('Value');
        $fixture->setNiveau('Value');
        $fixture->setAnneeuniversitaire('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'classe[nom]' => 'Something New',
            'classe[niveau]' => 'Something New',
            'classe[anneeuniversitaire]' => 'Something New',
        ]);

        self::assertResponseRedirects('/classe/');

        $fixture = $this->classeRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getNiveau());
        self::assertSame('Something New', $fixture[0]->getAnneeuniversitaire());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Classe();
        $fixture->setNom('Value');
        $fixture->setNiveau('Value');
        $fixture->setAnneeuniversitaire('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/classe/');
        self::assertSame(0, $this->classeRepository->count([]));
    }
}
