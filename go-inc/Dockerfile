# Start with a base image containing Go runtime
FROM golang:latest

# Set the Current Working Directory inside the container
WORKDIR /app

# Copy the source code from the host machine to the Working Directory inside the container
COPY . .

# Build the Go application inside the container
RUN go build -o myapp .

# Expose port 4000 to the outside world
EXPOSE 4000

# Command to run the executable
CMD ["./myapp"]