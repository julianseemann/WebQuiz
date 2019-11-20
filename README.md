# Changelog:
28.4.2019: Wir sind in baseproject migriert
            
            die HTMLs werden ab jetzt als PHPs gespeichert in includes/views
            editing erfolgt genauso wie wenn sie als HTMls gespeichert wären

            stylesheet.css ist im Ordner css befindlich

            alle javascripts sind im Ordner js befindlich

            ihr müsst eine Datenbank WebQuiz, einen user test mit allen privileges und den Passwort test1234 erstellen.

            Für die Tabellen in WebQuiz verwendet die Abfragen im Ordner Databasedump... falls ein Error kommt, führt sie alle einzeln           aus 
            
            LG Adam
# Einstellung von Ports:
öffnet C:/Apache/Apache/conf/httpd.conf 
sucht nach "Listen"
es sollte Listen *:80 drinstehen
falls nicht, löscht alle anderen Einträge und schreibts das ein

Erlaubt port 80 im Firewall
# Lokation vom Server
das Verzeichnis WebQuiz muss in C:\xampp\htdocs liegen.
# Zugriff von einem Anderen Device
Falls ihr vom Handy oder einem anderem PC zugreifen wollt:
die Addresse für euer Server ist: http://\<ComputerName\>/WebQuiz

\<ComputerName\> bezeichnet den Namen eures Rechners... keine ahnung zum Beispiel Sandro_Hurensohn_PC

also mein Computer hab ich zum beispiel bacock genant. baCOCK ba.......COOOOOOOCK

demnach ist die Addresse:
http://bacock/WebQuiz 
für mich.

und bei Sandro Hurensohn:
http://Sandro_Hurensohn_PC/WebQuiz

Das funktioniert nur lokal, aber das passt so. Sonst müssten wir beim Router Port forwarding einstellen und das ist unnötig und ziemlich nervig... außerdem ginge das nicht im Netz unserer FH weil wir keine Rechte auf die Router haben.
# baseproject

Dieses Repository können Sie als Studenten der FH Kufstein des Kurses Web Development gerne als Basis für Ihre Projektarbeit nehmen.

Sollten Sie irgendwo über ein (c) copyright Daniel Hoover stoßen können Sie dieses gerne entfernen. Ich erhebe kein Copyright auf diesen Quelltext.

## Konfiguration

Passen Sie bitte die Dateien /.htaccess, /includes/dbconfig.php und /includes/config.php entsprechend an. 

## Grundsätzliche Nutzung

### Routen

Sie müssen in der Datei includes/routes.php entsprechende Routen definieren. Also bekannt geben für welche URL welcher Controller zu nutzen ist.

### View & Controller
Jeder View braucht einen eigenen Controller! Views liegen im Verzeichnis /includes/views/. Controller liegen im Verzeichnis /includes/views/controllers/

### Model
Häufig macht es Sinn, dass Sie für jede Tabelle ein eigenes Model schreiben. Models finden Sie in /includes/models/

### REST Klassen

Jeder Restservice hat auch eine eigene Klasse und erbt von RESTClass. Einen Restservice machen Sie in der Datei /includes/restservices.php bekannt.
Der Aufruf eines Restservices User über die API würde über /api/user/ erfolgen. (Die Klasse wird im REST Servicerequest dann Kleingeschrieben)

#### GET Request

Holen von Daten / Views. Ruft die Methode getRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des GET Requests)

#### POST Request

Erzeugen von Daten. z.B. das anlegen eines neuen Nutzers. Ruft die Methode createRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des POST Requests)

#### PUT Request

Speichern von Daten. z.B. das speichern von Daten nach ändern eines Nutzers. Ruft die Methode saveRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des PUT Requests)

#### DELETE Request

Löschen von Daten. z.B. das löschen von Nutzern. Ruft die Methode deleteRequest auf - in $data finden Sie alle übergebenen Parameter (Variablen des DELETE Requests)

## Tutorial

Ein kleines Tutorial um mit der Erweiterung und Nutzung dieses kleinen Frameworks warm zu werden finden Sie hier:
https://github.com/danielhoover/baseproject/wiki/Tutorial
