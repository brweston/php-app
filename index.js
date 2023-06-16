function addItem() {
    const form = document.forms.mainform;

    //find item element in form
    const itemEl = window.event.target.closest(".item");

    //extract and add to total price
    const priceToAdd = parseInt(itemEl.querySelector(".price").innerText);
    const newTotalPrice = parseInt(form.totalprice.value) + priceToAdd;
    form.totalprice.value = newTotalPrice;


    //increase number of items
    const countEl = form.count;
    const countValue = parseInt(countEl.value) + 1;
    countEl.value = countValue;
}