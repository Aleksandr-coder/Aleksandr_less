<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>
<style type="text/css">
	th, tr, td{
		border-collapse: collapse;
		border-spacing: 0;
		border: 1px solid #000;
		padding: 5px;
	}
	table{
		display: flex;
		flex-direction: column;
		text-align: left;
		color: #000; 
		width: fit-content;
		height: auto;
		background-color: #f5f2ec;
		margin-top: 20px;
		padding: 20px 25px;
		border-radius: 10px;
	}
	a{
        display: inline-block;
		height: 20px;
		padding: 10px;
		border: 1px solid #ccc;
		background: #f9ead7;
		color: #000;
		text-decoration: none;
		transition: all .3s;
		border-radius: 5px;
	}
	a:hover{
		background: #f29c2f;
		transition: all .3s;
	}
    form input{
		width: 20%;
        height: 20px;
        margin: 10px 0;
	}
    .error, .successful{
        color: #f23535;
        font-size: 22px;
        font-weight: 600;
    }
    .successful{
        color: #09a209;
    }
    .submit{
        width: 80px;
        height: 30px;
        cursor: pointer;
    }
</style>
<body>
    <a href="/">Home</a>
    <form action="/registry" method="POST">
        <label for="first_name">First name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="phone">phone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <input class="submit" type="submit" value="Submit">
	</form>
</body>
</html>