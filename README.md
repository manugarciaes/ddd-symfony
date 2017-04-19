DDD Symfony
=======================

```
$ cd skeleton

# first run
$ docker-compose up -d --build

# stop and resume
$ docker-compose -f stop
$ docker-compose -f start

# destroy
$ docker-compose -f down    # mysql and redis data will still be saved
$ docker-compose -f down -v # nuke everything, even the volumes
```

This setup enhances the FPM container with SSH access to ease debugging. The code is shared between containers and the host machine by relying on volumes.
