<?php
 /*
 * Classe TCriteria
 * Esta clase prove uma interface utilizada para definição de critérios
 */

 class TCriteria extends TExpression {
    private $expressions; //Armazena a lista de instruções
    private $operators; //Armazena a lista de operadores
    private $properties; //Propriedades do critério

    //Método construtor
    function __construct(){
        $this->expressions = array();
        $this->properties = array();
        $this->operators = array();
 }

 /*
 * Método Add
 * adiciona uma expressão ao critério
 * @param $expressions = expressão (objeto TExpression)
 * @param $operator = operador lógico de comparação
 */
 
    public function add(TExpression $expression, $operator = self::AND_OPERATOR) {
        // na primeira vez, não precisamos de operador lógico para 
}
?>