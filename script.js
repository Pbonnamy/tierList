function addItem(){
  const link = document.getElementById('itemLink').value;
  const list = document.getElementById('itemList');

  list.innerHTML+='<img src="'+link+'" class="itemStyle d-block">'
}

function delItem(){
  const list = document.getElementById('itemList');
  list.innerHTML = '';
}

for(let i = 0; i<5; i++){
  new Sortable(document.getElementById('cat'+i),{
    group:{
      name: 'shared',
      animation: 150
    }
  });
}

new Sortable(itemList,{
  group:{
    name: 'shared',
    animation: 150
  }
});
