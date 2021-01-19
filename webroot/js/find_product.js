var search = document.getElementById("search");
var targets = document.querySelectorAll(".target");


search.addEventListener("keyup", function(event) {
        Array.prototype.forEach.call(targets, function(target) {
            let product_name = target.querySelector(".el")
            if ((product_name.textContent.trim()).toLowerCase().indexOf(search.value.toLowerCase()) > -1)
            target.style.display = 'block';
            else target.style.display = 'none';
        });
});

function clearSearchForm(){
    var search = document.getElementById("search");
    search.value = "";
    Array.prototype.forEach.call(targets, function(target) {
        let product_name = target.querySelector(".el")
        if ((product_name.textContent.trim()).toLowerCase().indexOf(search.value.toLowerCase()) > -1)
        target.style.display = 'block';
        else target.style.display = 'none';
    });
}