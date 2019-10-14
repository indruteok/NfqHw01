# NfqHw01

Projektas naudoja autoloaderį. index.php Pagal namespace kviečiamos keturios funkcijos:
1-oji su (root namespace):-funkcija priima bet kokius argumentus ir su jais dirba. Stringą paverčia į integer ir toliau vykdo funkciją.
2-oji su (Nfq\Akademija\NotTyped namespac):-funkcija priima bet kokius argumentus ir su jais dirba, bet prašyta, kad funkcija gražins butent integer tipo reztltatą.
3-oji su (Nfq\Akademija\Soﬅ namespace): --funkcija priima bet kokius argumentus kurie priskiriami integer tipui, o gražinamas funkcijos rezultatas irgi nurodytas integer tipo.
4-oji su (Nfq\Akademija\Strict namespace) su declare (strict_types=1) direktyva:-funkcija priima bet kokius argumentus kurie priskiriami integer tipui, o gražinamas funkcijos rezultatas irgi nurodytas integer tipo. 
O strict_type užtikrina, kad paduodami parametrai į funkciją ir grąžinami rezultatai bus būtent to tipo, kurie nurodyti. Turėtų mesti Error, bet kadangi šita funkcija kviečiama kitame faile, tai  declare(strict_types=1) direktyva, jau nebegalioja. Šita direktyva suveikia tik kviečiant funkciją tame pačiame faile.
