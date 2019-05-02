document.addEventListener('DOMContentLoaded',function(){

    // var add_btns = document.getElementsByClassName('add_product');

    // for (let add_btn of add_btns) {
    //     add_btn.addEventListener('click', function (e) {
    //         e.preventDefault();
    //         var code_input = e.target.previousElementSibling;
    //         var barcode = code_input.value;
    //         getProductInfo(barcode, e);
    //     });
    // }

    var add_btns = document.getElementsByClassName('div_product');
    last_product = add_btns[add_btns.length -1];
    console.log(last_product);

});

function getProductInfo(barcode, e) {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (this.readyState === XMLHttpRequest.DONE) {
            if (this.status === 200) {

                var response = JSON.parse(this.responseText);
                var data = [];
                var product_name = response.product.product_name_fr;
                var product_image_url = response.product.image_front_url;
                var product_energy = response.product.nutriments.energy;
                var product_unit = response.product.nutriments.energy_unit;

                console.log(product_unit);
                console.log(product_energy);

                if(product_unit == "kJ") {
                    product_energy /= 4,1868;
                }

                parentDiv = e.target.parentElement;
                dataDiv = document.createElement('div');
                parentDiv.insertAdjacentElement('afterend', dataDiv);
                
                dataDiv.append(product_name);
                img = document.createElement('img');
                img.setAttribute('src', product_image_url);
                dataDiv.append(img);
                dataDiv.append(product_energy);

                data.push(product_name, product_image_url, product_energy);

            } else {
                console.log("Statut de la réponse: %d (%s)", this.status, this.statusText);
            }
        }
    }

    console.log(xhr.onreadystatechange);

    xhr.open('GET', 'https://fr.openfoodfacts.org/api/v0/product/' + barcode + '.json');
    xhr.send(null);

}