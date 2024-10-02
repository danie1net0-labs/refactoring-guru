# Factory Method

## Prós e contras

:white_check_mark: Evita acoplamentos firmes entre o criador e os produtos concretos. <br>
:white_check_mark: Princípio de responsabilidade única. Você pode mover o código de criação do produto para um único local do programa, facilitando a manutenção do código. <br>
:white_check_mark: Princípio aberto/fechado. Você pode introduzir novos tipos de produtos no programa sem quebrar o código cliente existente.

:x: O código pode se tornar mais complicado, pois você precisa introduzir muitas subclasses novas para implementar o padrão. O melhor cenário é quando você está introduzindo o padrão em uma hierarquia existente de classes criadoras.

## Relações com outros padrões

* Muitos projetos começam usando o _**Factory Method**_ (menos complicado e mais customizável através de subclasses) e evoluem para o _**Abstract Factory**_, _**Prototype**_, ou _**Builder**_ (mais flexíveis, mas mais complicados).


* Classes _**Abstract Factory**_ são quase sempre baseadas em um conjunto de métodos fábrica, mas você também pode usar o _**Prototype**_ para compor métodos dessas classes.


* Você pode usar o _**Factory Method**_ com o _**Iterator**_ para permitir que uma coleção de subclasses retornem diferentes tipos de iteradores compatíveis com as coleções.


* O _**Prototype**_ não é baseado em heranças, então ele não tem os inconvenientes dela. Por outro lado, o _**Prototype**_ precisa de uma inicialização complicada do objeto clonado. O _**Factory Method**_ é baseado em herança mas não precisa de uma etapa de inicialização.


* O _**Factory Method**_ é uma especialização do _**Template Method**_. Ao mesmo tempo, o _**Factory Method**_ pode servir como uma etapa em um _**Template Method**_ grande.