# PAwChO-zadanie1
#### a. zbudowania opracowanego obrazu kontenera,
```
$ cd zad1
$ docker build -f Dockerfile -t kmikitiuk/zad1:v1 .
```
#### b. uruchomienia kontenera na podstawie zbudowanego obrazu,
```
$ docker run -it -p 8000:80 --name zadanie1 kmikitiuk/zad1:v1 
```
#### c. sposobu uzyskania informacji, które wygenerował serwer w trakcie uruchamiana kontenera
```
$ docker exec -it zadanie1 cat logfile.txt
```
#### d. sprawdzenia, ile warstw posiada zbudowany obraz.
```
$ docker history kmikitiuk/zad1:v1
```
