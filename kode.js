document.body.onkeydown = function() {
                if (event.keyCode == 96 || event.keyCode == 48) {
                    forms.answer.value += '0'
                }
                
                if (event.keyCode == 8) {
                    forms.answer.value = forms.answer.value.slice(0, -1);
                }
                
                if (event.keyCode == 97 || event.keyCode == 49) {
                    forms.answer.value += '1'
                    }
                
                if (event.keyCode == 98 || event.keyCode == 50) {
                    forms.answer.value += '2'
                    }
                
                if (event.keyCode == 99 || event.keyCode == 51) {
                    forms.answer.value += '3'
                    }
                
                if (event.keyCode == 100 || event.keyCode == 52) {
                    forms.answer.value += '4'
                    }
                
                if (event.keyCode == 101 || event.keyCode == 53) {
                    forms.answer.value += '5'
                    }
                
                if (event.keyCode == 102 || event.keyCode == 54) {
                    forms.answer.value += '6'
                    }
                
                if (event.keyCode == 103 || event.keyCode == 55) {
                    forms.answer.value += '7'
                    }
                
                if (event.keyCode == 104 || event.keyCode == 56) {
                    forms.answer.value += '8'
                    }
                
                if (event.keyCode == 105 || event.keyCode == 57) {
                    forms.answer.value += '9'
                    }
                
                if (event.keyCode == 106) {
                    forms.answer.value += '*'
                    }
                
                if (event.keyCode == 107) {
                    forms.answer.value += '+'
                    }
                
                if (event.keyCode == 109) {
                    forms.answer.value += '-'
                    }
                
                if (event.keyCode == 111) {
                    forms.answer.value += '/'
                    }
                
                if (event.keyCode == 13) {
                    forms.answer.value = eval(float(forms.answer.value));
                    }
                    
            }