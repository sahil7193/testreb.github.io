const fields = document.querySelectorAll('fieldset.form-group');

let name = 1;

fields.forEach(field => {

    const boxes = field.querySelectorAll('.single-checks');
    boxes.forEach(box => {
        const inputs = box.querySelectorAll('input');
        inputs.forEach(input => {
            input.removeAttribute('name');
           input.setAttribute('name',name);
        }) 
    })
    name++;
})