# poczta-tracking-api

## Śledzenie przesyłek Poczty Polskiej S.A. - ver. 0.71
Informacje: http://www.poczta-polska.pl/webservices/

| Dokumentacja | [link](http://www.poczta-polska.pl/pliki/webservices/Metody%20i%20struktury%20uslugi%20sieciowej%20Poczty%20Polskiej%20SA.pdf) |      |
| ------------ | ------------------------------------------------------------ | ---- |
| WSDL         | [link](https://tt.poczta-polska.pl/Sledzenie/services/Sledzenie?wsdl) |      |



Dostępne metody:

| Lp   | Nazwa                              | Opis                                                         |
| ---- | ---------------------------------- | ------------------------------------------------------------ |
| 1    | getVersion():string                | Zwraca numer wersji web service’u                            |
| 2    | getHello(string):string            | Metoda do testów poprawności przekazywania parametrów. Wymaga podania parametru `string` |
| 3    | getMaxLimit():int                  | Zwraca maksymalną liczbę o przesyłek (int), o które można zapytać się* metodami: `checkShipments` i `checkShipmentsExt` |
| 4    | checkShipment(string):object       | Zwraca informacje o danej przesyłce w strukturze Przesylka – szczegółowe informacje o placówkach w atrybutach typu Jednostka **nie są** generowane |
| 5    | checkShipmentExt(string):object    | Zwraca informacje o danej przesyłce w strukturze Przesylka – szczegółowe informacje o placówkach w atrybutach typu Jednostka **są** generowane |
| 6    | checkShipments(string[]):object    | Zwraca informacje o podanych przesyłkach w strukturze Komunikat – szczegółowe informacje o placówkach w atrybutach typu Jednostka **nie są** generowane |
| 7    | checkShipmentsExt(string[]):object | Zwraca informacje o podanych przesyłkach w strukturze Komunikat – szczegółowe informacje o placówkach w atrybutach typu Jednostka **są** generowane |

