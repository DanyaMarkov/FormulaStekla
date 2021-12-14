let calculate = () => {
    let summ = summation();

    //Вывод итого
    let result = document.getElementById('calculate-result');
    result.innerHTML = "Итого: " + summ + " руб";
}

let summation = () => {

    let summ = 0;

    let itemType = document.getElementById('input-item-type');

    let s = Number(document.getElementById('S').value);
    let p = Number(document.getElementById('P').value);
    let count = Number(document.getElementById('count').value);

    var montage = document.getElementById('checkMontage');
    var delivery = document.getElementById('checkDelivery');

    //тип обработки
    let processingType = document.getElementById('processing-type');

    let selectedItemType = itemType.options[itemType.selectedIndex].text;
    let selectedProcessingType = processingType.options[processingType.selectedIndex].text;

    let xItemType = 1;

    switch (selectedItemType) {
        case "Стекло":
            xItemType = 300;
            break;
        case "Зеркало":
            xItemType = 500;
            break;
        case "Лакобель":
            xItemType = 700;
            break;
    }

    if (s === 0 || p === 0) {
        alert("Введите параметры размера!")
    } else {
        //Как считается исходя из площади и периметра
        summ += (s * 0.04) * xItemType;
        summ += (p * 0.4) * xItemType;
    }

    if (count === 0) {
        alert("Укажите количество!")
    } else {
        //Как считается исходя из площади и периметра
        summ = summ * count;
    }

    if (montage.checked) {
        summ = summ + 1200;
        //alert("CHECK!!")
    }
    if (delivery.checked) {
        summ = summ + 500;
    }

    switch (selectedProcessingType) {
        case "Механический":
            summ = summ + ((s * p * count * 0.1) * 100);
            break;
        case "Термический":
            summ = summ + ((s * p * count * 0.1) * 200);
            break;
        case "Химический":
            summ = summ + ((s * p * count * 0.1) * 300);
            break;
    }
    summ = summ.toFixed(2)


    //Делим итоговую сумму на разряды, чтобы было красиво   
    summ = summ.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");

    return (summ);

}


//Вешаю события

let s = document.getElementById("S");
s.addEventListener("change", function () {
    calculate();
});

let p = document.getElementById("P");
p.addEventListener("change", function () {
    calculate();
});

let count = document.getElementById("count");
count.addEventListener("change", function () {
    calculate();
});

let montage = document.getElementById("montage");
montage.addEventListener("change", function () {
    calculate();
});

let delivery = document.getElementById("delivery");
delivery.addEventListener("change", function () {
    calculate();
});

// //Не работает, надо переписывать под <SELECT></SELECT>
// let itemType = document.getElementById("itemType");
// itemType.addEventListener("change", function () {
//     calculate();
// });
// //Не работает, надо переписывать под <SELECT></SELECT>
// let processingType = document.getElementById("processingType");
// processingType.addEventListener("change", function () {
//     calculate();
// });
