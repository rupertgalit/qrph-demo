<!-- 
<html>

<head>

</head>

<body>


<script>

    fetch('https://reqres.in/api/users' , {
        method: 'POST',
        headers: { 'Content-Type': 'application/json'
    },
        body: JSON.stringify({
            name: 'USER2'
        })
    })

    .then(res => {
       return res.json();        

    })
    .then(data => console.log(data))
    .catch(error => console.log('ERROR'))

</script>

</body>


</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JSON Test</title>
</head>


<body>
    <h1>DATA</h1>
    <ul id="authors" class="dis"></ul>
    <ul id="authors" class="dis2"></ul>
    <div class="row"><span id="span"></span></div>
    <div id="cards"></div>
    
    <script>
      
    //   const url = 'https://jsonplaceholder.typicode.com/users';
        
      fetch('https://s3.ap-southeast-1.amazonaws.com/qrphtest.com/qrph.json',{
             
        })                   
        // .then(res => res.json())    
        .then((data)=>{
            return data.json(); 
        })    
        .then((data) => {          
            console.log(data);           
        })        
        .catch(function(error) {
        console.log(error);
        });         
    </script>
    
</body>
</html>