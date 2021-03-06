function addItem(link){
  const list = document.getElementById('itemList');
  const tmpList = document.getElementById('tmpImg');

  $(function () {
     $('#exampleModal').modal('toggle');
  });

  list.innerHTML+='<img src="'+link+'" class="itemStyle d-block">';
}

$("#searchBtn").click(function(){
  const link = document.getElementById('itemLink').value;
  const list = document.getElementById('tmpImg');
  $.ajax({
     url : 'contactApi.php',
     type : 'GET',
     data : 'query='+link,
     dataType : 'html',
     success : function(result){
       list.innerHTML=result;
       $(function () {
          $('#exampleModal').modal('toggle');
       });
     }
  });
});


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
