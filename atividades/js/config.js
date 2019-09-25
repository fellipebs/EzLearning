var blocklyArea = document.getElementById("blocklyArea");
var blocosDiv = document.getElementById("blocosDiv");
var workspace = Blockly.inject("blocosDiv", {
  media: "../../../google-blockly/media/",
  toolbox: document.getElementById("toolbox"),
  trashcan: true
});
var onresize = function(e) {
  // Compute the absolute coordinates and dimensions of blocklyArea.
  var element = blocklyArea;
  var x = 0;
  var y = 50;
  do {
    x += element.offsetLeft;
    y += element.offsetTop;
    element = element.offsetParent;
  } while (element);
  // Position blocklyDiv over blocklyArea.
  blocosDiv.style.left = x + "px";
  blocosDiv.style.top = y + "px";
  blocosDiv.style.width = blocklyArea.offsetWidth + "px";
  blocosDiv.style.height = blocklyArea.offsetHeight + "px";
  Blockly.svgResize(workspace);
};
window.addEventListener("resize", onresize, false);
onresize();
Blockly.svgResize(workspace);

salvar = function() {
  var xml = Blockly.Xml.workspaceToDom(workspace);
  var code = Blockly.JavaScript.workspaceToCode(workspace);
  xml_text = Blockly.Xml.domToPrettyText(xml);
  document.getElementById("xml").innerHTML = xml_text;
  document.getElementById("js").innerHTML = code;
  document.cookie = "xml=" + xml_text;
  alert(cookie_formatado);
};
atividade_salva = function() {
  var nome = document.getElementById("nome").value;
  readTextFile(nome + "_xml.txt");
  var xml = Blockly.Xml.textToDom(allText);
  Blockly.Xml.domToWorkspace(xml, workspace);
};

executar = function() {
  Blockly.JavaScript.INFINITE_LOOP_TRAP = "  checkTimeout();\n";
  var timeouts = 0;
  var checkTimeout = function() {
    if (timeouts++ > 1000000) {
      throw MSG["timeout"];
    }
  };
  var code = Blockly.JavaScript.workspaceToCode(workspace);
  Blockly.JavaScript.INFINITE_LOOP_TRAP = null;
  try {
    eval(code);
  } catch (e) {
    alert(MSG["badCode"].replace("%1", e));
  }
};

function readTextFile(file) {
  var rawFile = new XMLHttpRequest();
  rawFile.open("GET", file, false);
  rawFile.onreadystatechange = function() {
    if (rawFile.readyState === 4) {
      if (rawFile.status === 200 || rawFile.status == 0) {
        allText = rawFile.responseText;
      }
    }
  };
  rawFile.send(null);
}
