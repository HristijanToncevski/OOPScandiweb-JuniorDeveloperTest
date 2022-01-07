const selected = document.getElementById('productType');
const dynamicForm = document.getElementById('dynamicForm');
let allAtr = document.getElementsByClassName('allAtr');
let dvd = document.getElementsByClassName('dvd');
let book = document.getElementsByClassName('book');
let furniture = document.getElementsByClassName('furniture');
let hint = document.getElementById('hint');

selected.addEventListener('change', function() {
    let x = this.value;
    for(let i = 0; allAtr.length>i;i++){
        allAtr[i].style.display ='none';
    }
    if(x == 'DVD'){        
        for(let i = 0; dvd.length>i;i++){
            dvd[i].style.display ='block';
            hint.innerText = "Please provide size in MB"
        }
    } else if(x == 'Book'){
        for(let i = 0; book.length>i;i++){
            book[i].style.display ='block';
            hint.innerText = "Please provide weight in KG"
        }
    } else if(x == 'Furniture'){        
        for(let i = 0; furniture.length>i;i++){
            furniture[i].style.display ='block';
            hint.innerText = "Please provide dimensions in HxWxL format"

        }
    }
 });


 