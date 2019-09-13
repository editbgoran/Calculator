function js_calculate() {
       
  const table = document.getElementById('mytable');
  const rows = document.querySelectorAll('tr');
  const rowsArray = Array.from(rows);
  
  //getting the position of the cell where  user click occurred
  table.addEventListener('click', (event) => {
    const rowIndex = rowsArray.findIndex(row => row.contains(event.target));
    const columns = Array.from(rowsArray[rowIndex].querySelectorAll('td'));
    const columnIndex = columns.findIndex(column => column == event.target);
    console.log(rowIndex, columnIndex);
    
    alert('The result of' + ' ' + rowIndex + 'x' + columnIndex + ' is:'  + ' ' + rowIndex * columnIndex);

    //sending cell position to the index.php with ajax jquery POST method
    var request = $.ajax({
      type: 'POST',
      url: 'index.php',
      data: {"factor1":rowIndex,"factor2":columnIndex}, 
      success: function (any) {
        //console.log(any); 
      },
      error: function(error) {
        console.log('Error: ' + error);
      }
    });

  })
  
}

 

  


