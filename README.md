###### (version: 1.0)
# Container
### Start Containers
###### docker compose up -d

### Stopping all containers  
###### docker stop $(docker ps -q)

### Stopping and removing  all containers  
###### docker compose down




### Granting all permissions (read, write, and execute) to a folder and its contents  
###### sudo chmod -R 777 src/




### Entering the MySQL container  
###### docker exec -it <container_name> bash




### Rebuilds the Docker images and starts the containers in detached mode.  
###### docker-compose up -d --build





### Stops and removes all unused containers, images, volumes, and networks without confirmation.  
###### docker system prune -a --volumes -f




### Stops all running containers and then cleans up the Docker system by removing all unused containers, images, volumes, and networks.  
###### docker stop $(docker ps -aq) && docker system prune -af --volumes



# PhpStorm setup 
### allows searching for variables outside the current file
###### 1)Go to File -> Settings (or PHPStorm -> Preferences on macOS).
###### 2)In the settings menu, select Editor -> Inspections.
###### 3)In the PHP section, find Undefined symbols and expand it.
###### 4) Select Undefined variable.
###### 5)Check the box Search for variables definition outside the current file.
###### 6)Click Apply, then OK to save the changes.

