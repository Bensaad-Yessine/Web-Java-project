# Alternative Docker setup using existing compose.yaml
# This shows how to add the Face Recognition service to the existing Docker setup

# Add this service to your existing compose.yaml or compose.override.yaml:

---
# Docker Compose for Face Recognition Development

version: '3.8'

services:
  # Your existing services (php, nginx, mysql, etc.)
  # ... existing configuration ...

  face-recognition:
    build:
      context: .
      dockerfile: Dockerfile
    ports:
      - "5000:5000"
    volumes:
      - ./public/uploads/profile_pics:/app/profile_pics
      - ./FaceIdscript:/app/data
    environment:
      - FLASK_ENV=development
      - PYTHONUNBUFFERED=1
    networks:
      - app-network
    healthcheck:
      test: ["CMD", "curl", "-f", "http://localhost:5000/health"]
      interval: 30s
      timeout: 10s
      retries: 3
      start_period: 40s
    depends_on:
      - nginx  # or whatever your web server is called
    profiles:
      - dev
      - full

networks:
  app-network:
    driver: bridge

# Usage:
# docker-compose up -d face-recognition
# or with profiles:
# docker-compose --profile dev up -d
