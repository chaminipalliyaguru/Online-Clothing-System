function quantity(){

      var myBox1 = document.getElementById('price').value;
  		var myBox2 = document.getElementById('qty').value;
  		var result = document.getElementById('tot');
      var result2 = document.getElementById('total');
      var result3 = document.getElementById('qty2');
      var result4 = document.getElementById('total2');

      var myResult = myBox1 * myBox2;
  		result.value = myResult;
      result2.innerHTML ='Total LKR'+' '+myResult+'.00';
      result3.value = myBox2;
      result4.value = myBox1 * myBox2;


}
