# Webstránka pre servis počítačov

Lukáš Lokša

5ZYI36

## Stručný opis projektu
Webová aplikácia bude slúžiť pre servis počítačov a notebookov, ktorý si praje rozšíriť svoje služby online. Jej primárnou úlohou bude spojenie zákazníka so servisom v prípade opravy zariadenia.
Zákazník bude mať možnosť sa na stránke zaregistrovať a následne objednať servis na jeho zariadenie. Po vytvorení objednávky bude zariadenie prebraté kuriérom / technikom a zákazník bude mať plný prehľad o aktuálnom stave opravy. Po preverení zariadenia technikom sa zákazníkovi zobrazí cenová ponuka, ktorú bude môcť prijať a zariadenie mu bude opravené, alebo bude môcť odsúpiť a zariadenie bude vrátené, alebo bude mať možnosť zariadenie servisu predať za určenú čiastku.

Vedľajšou úlohou bude internetový obchod, na ktorom bude servis ponúkať hlavne repasované zariadenia, ale taktiež hardvérové komponenty a príslušenstvo k počítačom.

## Role v projekte
- Návštevník - Neregistrovaný používateľ, ktorý má prístup k registrácií / prihláseniu a k prezeraniu produktov internetového obchodu
- Registrovaný zákazník - Prihlásený používateľ, ktorý má právo objednať servis a nakupovať v internetovom obchode
- Technik - Pracovník servisu, ktorý príjma objednávky, určuje cenu opravy a komunikuje so zákazníkom
- Vedúci - Pridáva nové produkty, nastavuje ceny, pridáva nových zamestnancov

## Prípady použitia podľa rolí
### Návštevník
- zaregistruje sa do aplikácie
- prihlási sa do aplikácie
- prezerá zoznam produktov internetového obchodu
- filtruje produkty podľa kategórie a ceny
- zobrazí detail produktu
- prečíta si informácie o ponúkaných službách na hlavnej stránke

### Registrovaný zákazník
- pridá produkt do nákupného košíka a upraví jeho obsah
- dokončí nákup a vytvorí objednávku
- zobrazí históriu svojich objednávok
- vytvorí objednávku servisu (zadá údaje o zariadení, popis poruchy a termín vyzdvihnutia)
- sleduje aktuálny stav svojich servisných objednávok
- prijme cenovú ponuku, odstúpi od opravy alebo ponúkne zariadenie servisu na predaj
- upraví svoj profil (osobné a firemné údaje)

### Technik
- zobrazí zoznam servisných objednávok a filtruje ich podľa stavu
- zmení stav objednávky (napr. prijatá, v diagnostike, čaká na schválenie ponuky, v oprave, hotová)
- zadá cenovú ponuku opravy
- pridá poznámku k oprave
- označí objednávku ako vrátenú zákazníkovi alebo vykúpenú servisom

### Vedúci
- pridá, upraví a zmaže produkt v internetovom obchode
- vytvorí, upraví a zmaže kategóriu produktov
- nastaví alebo zmení cenu produktu
- vytvorí účet technika a upraví alebo zruší jeho prístup
- zobrazí prehľad všetkých e-shop a servisných objednávok

## Plánované entity
- Používateľ - Základné dáta používateľa (meno, adresa, email, príp. firemné údaje...)
- Kategória - Kategória konkrétneho produktu v E-Shope
- E-Shop produkt - Informácie o konkrétnom produkte (názov, popis, cena, kategória...)
- E-Shop objednávka - Informácie o objednávke (používateľ, obsah objednávky, informácie o platbe...)
- Položka E-Shop objednávky - Jeden produkt v objednávke (objednávka, produkt, množstvo, cena v čase nákupu)
- Objednávka servisu - Servisné informácie (používateľ, dátum vyzdvihnutia, informácie o zariadení...)
- Správa - (text, odosielateľ, čas...)

## Vzťahy medzi entitami
- Kategória 1:N E-Shop produkt - jedna kategória obsahuje viac produktov, každý produkt patrí práve do jednej kategórie
- Používateľ 1:N E-Shop objednávka - jeden zákazník môže vytvoriť viac objednávok, každá objednávka patrí jednému zákazníkovi
- E-Shop objednávka 1:N Položka E-Shop objednávky - jedna objednávka obsahuje jednu alebo viac položiek
- E-Shop produkt 1:N Položka E-Shop objednávky - jeden produkt sa môže vyskytovať v položkách mnohých objednávok
- E-Shop objednávka M:N E-Shop produkt - výsledný vzťah medzi objednávkou a produktom, ktorý je v databáze rozložený cez asociačnú tabuľku Položka E-Shop objednávky (obsahuje množstvo a cenu v čase nákupu)
- Používateľ (zákazník) 1:N Objednávka servisu - jeden zákazník môže zadať viac servisných objednávok, každá patrí jednému zákazníkovi

## Hlavné stránky aplikácie
- Hlavná stránka - Zobrazuje ponúkané služby
- Prihlásenie / registrácia - Stránka na zadávanie údajov
- Internetový obchod - Zoznam všetkých ponúkaných produktov s príslušnými cenami
- Nákupný košík - Vedľajšia stránka internetového obchodu, ktorá bude slúžiť na sumarizáciu a dokončenie nákupu
- Zákaznícky panel - Možnosť vyplniť formulár na objednávku servisu, sledovanie stavu servisu, komunikácia s technikom
- Technikov panel - Stránka na spracovanie objednávok a komunikáciu so zákazníkom
- Hlavný panel - Stránka na pridávanie/odoberanie produktov, nastavovanie cien, pridávanie zamestnancov

## Rozdelenie funkcionality
Základné funkcie zahŕňajú všetky funkcionality spomenuté v stručnom opise projektu, teda aplikácia musí poskytovať všetky náležitosti súvisiace so servisom zariadení a taktiež internetový obchod, ktorý musí obsahovať aspoň jednoduchú možnosť vytvorenia objednávky.

Rozširujúce funkcie, ktoré budú implementované v prípade dostatku času:
- Plnohodnotný nákupný košík s viacerými platobnými bránami a prepojením na viacerých dopravcov, napr. Packeta
- Bodový systém: zákazníci by za jednotlivé nákupy a opravy v servise získavali body, ktoré by sa podľa dosiahnutej úrovne pretavovali do zliav v e-shope
