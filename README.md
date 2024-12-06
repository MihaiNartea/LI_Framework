
# LUCRUL INDIVIDUAL FRAMEWORK

## Autorii proiectului

-  Nartea Mihai
-  Victor Veste

----------

## Descrierea proiectului

Acest proiect reprezintă o aplicație web pentru gestionarea postărilor de blog, creată cu **Laravel**. Aplicația oferă funcționalități de gestionare a postărilor și categoriilor de blog și include un **admin panel** pentru administrarea conținutului. Adminii pot crea, edita, vizualiza și șterge postări și categorii. Aplicația este construită folosind **FilamentPHP** pentru a crea o interfață administrativă ușor de utilizat. De asemenea, proiectul respectă arhitectura **MVC (Model-View-Controller)**, fiind modular și ușor de extins.

----------

### Funcții principale:

-   **Admin Panel**: Utilizarea **FilamentPHP** pentru crearea unui panou de administrare ușor de utilizat pentru gestionarea postărilor și categoriilor.
-   **CRUD pentru postări și categorii**: Posibilitatea de a crea, citi, edita și șterge postări și categorii.
-   **Filtrare după categorii**: Afișarea postărilor dintr-o anumită categorie.
-   **Paginare**: Afișarea postărilor cu câte 10 pe pagină.
-   **Protecție CSRF**: Securitate împotriva atacurilor Cross-Site Request Forgery.
-   **Interfață Bootstrap simplă și intuitivă**: Design responsive, ușor de utilizat pe toate dispozitivele.

----------

## Instrucțiuni de instalare și pornire

Pentru a rula aplicația local, urmați pașii de mai jos:

### 1. **Clonați proiectul**

Descărcați codul sursă utilizând comanda:

`git clone https://github.com/MihaiNartea/LI_Framework.git` 

### 2. **Instalați dependențele**

Navigați în directorul proiectului și instalați dependențele necesare:

`cd proiectul-tau
composer install
npm install` 

### 3. **Configurați fișierul `.env`**

Copiați fișierul `.env.example` în `.env` și configurați conexiunea la baza de date:

`cp .env.example .env` 

### 4. **Generează cheia aplicației**

Rulați comanda:

`php artisan key:generate` 

### 5. **Rulați migrațiile**

Creați tabelele necesare în baza de date:

`php artisan migrate` 

### 6. **Instalarea și configurarea FilamentPHP**

FilamentPHP este utilizat pentru a construi interfața administrativă. Instalați Filament cu:

`composer require filament/filament` 

Pentru a crea un utilizator admin în Filament, puteți folosi comanda:

`php artisan make:filament-user` 

Această comandă va crea un utilizator care poate avea acces la panoul de administrare al Filament.

### 7. **Porniți serverul**

Lansați serverul local:

`npm run dev`
`php artisan serve` 

----------

## Exemple de utilizare

### **Admin Panel**

-   **Acces Admin**: Accesați `/admin` pentru a vizualiza panoul de administrare.
-   Adminii pot gestiona postările și categoriile prin interfața Filament, care oferă formulare ușor de utilizat pentru adăugarea, editarea și ștergerea postărilor și categoriilor.

### **Crearea unei postări**

1.  Autentificați-vă în panoul de administrare.
2.  Navigați la secțiunea **Postări** din admin panel.
3.  Adăugați un titlu, descriere și selectați o categorie.
4.  Salvați postarea pentru a o publica.

### **Vizualizarea postărilor**

-   Accesați pagina `/posts`  pentru a vizualiza toate postările publicate.
-   Filtrați postările pe categorii pentru a vizualiza doar postările dintr-o anumită categorie. 

### **Editarea postărilor**

1.  Navigați la postarea dorită din admin panel.
2.  Editați titlul, descrierea sau categoria și salvați modificările.

### **Ștergerea postărilor**

1.  În panoul de administrare, accesați postarea dorită.
2.  Apăsați pe butonul **Delete** pentru a șterge postarea.

----------

## Funcționalități suplimentare

### **Navbar cu categorii**

-   Afișează toate categoriile disponibile.
-   Permite filtrarea postărilor pe baza categoriei selectate.

### **Pagină individuală pentru postări**

-   Fiecare postare are o pagină proprie unde se afișează:
    -   Titlul,
    -   Descrierea completă,
    -   Categoria,
    -   Data publicării (dacă este disponibilă).

----------

## Lista surselor utilizate

-   [Laravel Documentation](https://laravel.com/docs/10.x)
-   [FilamentPHP](https://filamentphp.com/)
-   [Bootstrap](https://getbootstrap.com/)

----------

## Alte aspecte semnificative

-   **Paginare avansată**: Implementată cu `paginate(10)` din Eloquent.
-   **Validare a datelor**: Toate formularele sunt validate pentru a preveni introducerea de date incorecte.
-   **Securitate**: Protecție împotriva atacurilor CSRF și SQL Injection.
-   **Design responsive**: Utilizarea Bootstrap garantează o afișare optimă pe orice dispozitiv.

----------

### Observații

Acest proiect este ideal pentru a fi utilizat ca platformă de blog simplă, cu un admin panel construit cu FilamentPHP, ce permite gestionarea ușoară a postărilor și categoriilor. Proiectul poate fi extins cu ușurință pentru a adăuga noi funcționalități pe măsură ce necesitățile evoluează.