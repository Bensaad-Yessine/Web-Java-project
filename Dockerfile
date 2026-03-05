# Dockerfile for Face Recognition API
# Use: docker build -t face-recognition-api .
#      docker run -p 5000:5000 -v /path/to/profile_pics:/app/profile_pics face-recognition-api

FROM python:3.9-slim

WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libopenblas-dev \
    liblapack-dev \
    libatlas-base-dev \
    libjasper-dev \
    libtiff5 \
    libjasper1 \
    libharfbuzz0b \
    libwebp6 \
    libtiff5 \
    libjasper1 \
    libqtgui4 \
    libqt4-test \
    libhdf5-dev \
    libharfbuzz0b \
    libwebp6 \
    libtiff5 \
    gcc \
    && rm -rf /var/lib/apt/lists/*

# Copy requirements
COPY requirements.txt .

# Install Python dependencies
RUN pip install --no-cache-dir -r requirements.txt

# Copy application
COPY FaceIdscript/main.py .

# Create profile_pics volume mount point
RUN mkdir -p /app/profile_pics

# Expose port
EXPOSE 5000

# Health check
HEALTHCHECK --interval=30s --timeout=10s --start-period=40s --retries=3 \
    CMD python -c "import requests; requests.get('http://localhost:5000/health')" || exit 1

# Run the Flask app
CMD ["python", "main.py"]
