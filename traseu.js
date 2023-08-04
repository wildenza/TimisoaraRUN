
//fct schimb model 
function changeModel() {
    var selectElement = document.getElementById("model-select");
    var modelViewerElement = document.querySelector("model-viewer");
    var selectedModel = selectElement.value;
    modelViewerElement.setAttribute("src", selectedModel);
}