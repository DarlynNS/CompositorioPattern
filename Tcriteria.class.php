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
        $this->operators = array();
    }

    /*
    * Método Add
    * adiciona uma expressão ao critério
    * @param $expressions = expressão (objeto TExpression)
    * @param $operator = operador lógico de comparação
    */
 
    public function add(TExpression $expression, $operator = self::AND_OPERATOR) {
        // na primeira vez, não precisamos de operador lógico para concatenar
        if(empty($this->expressions)) {
            $operator = NULL;
        }
    // agrega o resultado da expressão a lista de expressões
    $this->expressions[] = $expression;
    $this->operators[] = $operator;
    }
    /* Método dump()
    * retorna a expressão final
    */
    public function dump(){
        //concatena a lista de expressões
        if(count($this->expressions)>0) {
            $result = '';
            foreach($this->expressions as $i=> $expression) {
                $operator = $this->operators[$i];
                //concatena o operador com a respectiva expressão
                $result .= $operator. $expression->dump(). ' ';
            }
            $result = trim($result);
            return "({$result})";
        }
    }
    /* Método SetPropriety
    * define o valor de uma popriedade
    * @param $property = propriedade
    * @param $value = valor
    */
    public function setProperty($property, $value){
        if(isset($value)){
            $this->properties[$property] = $value;
        }else{
            $this->properties[$property] = $NULL;
        }
    }

    /* Método getProperty()
    * retorna o valor da propriedade
    *@param $property = propriedade
    */

    public function getProperty($property) {
        if(isset($this->properties[$property])){
            return $this->properties[$property];
        }
    }
 }
 
?>