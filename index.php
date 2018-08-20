<!DOCTYPE html>
<html>
    <head>
        <title>Lommeregner</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css">
        
        <style>
            #clear {
                width: 220px;
                
            }
            
            .formstyle {
                width: 300px;
                height: 400px;
                margin: auto;
                
            }
            
            input {
                width: 70px;
                height: 40px;
                margin-right: 2px;
                margin-bottom: 7px;
                background-color: transparent;
                border: 1px solid white;
                color: white;
                
            }
            
            .answerstyle {
                width: 220px;
                margin-top: 50%;
            }
          
            input:hover {
                background-color: white;
                color: #4286f4;
                cursor: pointer;
            }
            
        </style>
        
        
    </head>
    <body style="background-color: #4286f4;">
        
        <div class="formstyle" style="text-align: center;">
            <form name="forms">
                <input type="text" name="answer" class="answerstyle" readonly> <br> <br>
                <input type="button" value="1" onclick="forms.answer.value += '1' ">
                <input type="button" value="2" onclick="forms.answer.value += '2' ">
                <input type="button" value="3" onclick="forms.answer.value += '3' ">
                
                <br>
                <input type="button" value="4" onclick="forms.answer.value += '4' ">
                <input type="button" value="5" onclick="forms.answer.value += '5' ">
                <input type="button" value="6" onclick="forms.answer.value += '6' ">
                <br>
                <input type="button" value="7" onclick="forms.answer.value += '7' ">
                <input type="button" value="8" onclick="forms.answer.value += '8' ">
                <input type="button" value="9" onclick="forms.answer.value += '9' ">
                <br>
                <input type="button" value="+" onclick="forms.answer.value += '+' ">
                <input type="button" value="-" onclick="forms.answer.value += '-' ">
                <input type="button" value="*" onclick="forms.answer.value += '*' ">
                <br>
                <input type="button" value="/" onclick="forms.answer.value += '/' ">
                <input type="button" value="0" onclick="forms.answer.value += '0' ">
                <input type="button" value="=" onclick="forms.answer.value = eval(forms.answer.value) ">
                <br>
                <input type="button" value="Slet ALT" onclick="forms.answer.value = '' " id="clear">
            </form>
        </div>
        
        <script>
            
            
            
        </script>
        
    </body>
</html>