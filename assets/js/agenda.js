$(document).ready(function () {
    if ( typeof NodeList.prototype.forEach === "function" ) return false;
    NodeList.prototype.forEach = Array.prototype.forEach;
});
var eventList = {
        
        name: '',
        
        enterName: function (name) {
            var nameInput = document.getElementById('eventName');
            if (nameInput.value !== '') {
                this.name = nameInput.value;
                this.displayItem();
                nameInput.value = '';
            }
        },
        
        enterDescription: function () {
            var list = document.querySelector('.call');
            list.addEventListener('click', function (event) {
                var listItem = event.target.parentElement;
                
                if (event.target.textContent === '+') {
                    var descriptionInput = listItem.querySelector('input');
                    var descriptionValue = descriptionInput.value;
                    if (descriptionValue !== '') {
                        var descriptionDiv = document.createElement('div');
                        descriptionDiv.className = 'description';
                        descriptionDiv.textContent = descriptionValue;
                        listItem.appendChild(descriptionDiv);
                        descriptionInput.style.display = 'none';
                        event.target.style.display = 'none';
                    }
                }
            });
        },
    
        deleteOrLock: function () {
            var list = document.querySelector('.call');
            list.addEventListener('click', function (event) {
                var listItem = event.target.parentElement;
                
                if (event.target.textContent === 'i') {
                    if (listItem.style.background === 'salmon') {
                        listItem.style.background = 'white'
                        listItem.style.color = 'black';
                    } else {
                        listItem.style.background = 'salmon';
                        listItem.style.color = 'white';
                    }
                    
                } else if (event.target.textContent === 'x') {
                    if (listItem.style.background !== 'salmon') {
                        listItem.style.display = 'none';
                    }
                };
                
            })
        },
        
        displayItem: function () {
            
            var list = document.querySelector('.call');
            var item = document.createElement('li');
            item.className = 'mainTitle';
            item.textContent = this.name;
            list.appendChild(item);
            
            var markImportant = document.createElement('button');
            markImportant.textContent = 'i';
            markImportant.className = 'markImportant';
            
            var deleteButton = document.createElement('button');
            deleteButton.textContent = 'x';
            deleteButton.className = 'deleteButton';
            
            var addDescription = document.createElement('button');
            addDescription.textContent = '+';
            addDescription.className = 'addDescription';
           
            
            var eventDescription = document.createElement('input');
            eventDescription.className = 'eventDescription';
            eventDescription.placeholder = 'Enter a short description of your event here..';
            
            list.childNodes.forEach(function (item, index) {
                
                document.getElementsByClassName('mainTitle')[index].appendChild(markImportant);
                document.getElementsByClassName('mainTitle')[index].appendChild(deleteButton);
                document.getElementsByClassName('mainTitle')[index].appendChild(addDescription);
                document.getElementsByClassName('mainTitle')[index].appendChild(eventDescription);
                
            });
            
        }
    };

eventList.deleteOrLock();
eventList.enterDescription();

