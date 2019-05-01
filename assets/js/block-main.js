Blockly.Blocks['andar_pra_frente'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Andar pra frente");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};
  Blockly.Blocks['virar'] = {
    init: function() {
      this.appendDummyInput()
          .appendField("Virar")
          .appendField(new Blockly.FieldDropdown([["Esquerda","virarEsquerda"], ["Direita","virarDireita"]]), "NAME");
      this.setPreviousStatement(true, null);
      this.setNextStatement(true, null);
      this.setColour(230);
   this.setTooltip("");
   this.setHelpUrl("");
    }
  };
  Blockly.JavaScript['andar_pra_frente'] = function(block) {
    // TODO: Assemble JavaScript into code variable.
    var code = '...;\n';
    return code;
  };
  Blockly.JavaScript['virar'] = function(block) {
    var dropdown_name = block.getFieldValue('NAME');
    // TODO: Assemble JavaScript into code variable.
    var code = '...;\n';
    return code;
  };
