FROM nginx

# Installing nano when assembling the container
RUN apt-get update && apt-get install -y nano

# Copy the Nginx configuration file (default.conf) inside the container
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy the file index.php inside the container
COPY ./nginx/index.php /usr/share/nginx/html/index.php

# Defining the port that will be opened in the container
EXPOSE 80

# Command to run Nginx inside the container
CMD ["nginx", "-g", "daemon off;"]