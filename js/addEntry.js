// let form = addEventListener('submit', addLink); // change to clicking header title?

// let form = document.getElementById('loginform');
// form.addEventListener('submit', addLink);

// document.addEventListener('DOMContentLoaded', addLink);

// function addLink (submitButton) {

//     submitButton.preventDefault();

//     let headerlinks = document.getElementById('headertitles'); // KEEP THIS IN ADD LINK

//     let addEntryDiv = document.createElement('div');
//     addEntryDiv.className = "headeraddentry";
    
//     let addEntryItem = document.createElement('li');
    
//     let addEntryLinkToPHPFile = document.createElement('a');
//     addEntryLinkToPHPFile.href = "./addEntry.php";
//     addEntryLinkToPHPFile.textContent = 'Add Entry';
    
//     addEntryItem.appendChild(addEntryLinkToPHPFile);
//     console.log(addEntryItem);

//     addEntryDiv.appendChild(addEntryItem);
//     console.log(addEntryDiv);

//     headerlinks.appendChild(addEntryDiv);
//     console.log(headerlinks);
// }

// document.addEventListener('DOMContentLoaded', function addLink (submitButton) {

//     submitButton.preventDefault();

//     let headerlinks = document.getElementById('headertitles'); // KEEP THIS IN ADD LINK

//     let addEntryDiv = document.createElement('div');
//     addEntryDiv.className = "headeraddentry";
    
//     let addEntryItem = document.createElement('li');
    
//     let addEntryLinkToPHPFile = document.createElement('a');
//     addEntryLinkToPHPFile.href = "./addEntry.php";
//     addEntryLinkToPHPFile.textContent = 'Add Entry';
    
//     addEntryItem.appendChild(addEntryLinkToPHPFile);
//     console.log(addEntryItem);

//     addEntryDiv.appendChild(addEntryItem);
//     console.log(addEntryDiv);

//     headerlinks.appendChild(addEntryDiv);
//     console.log(headerlinks);
// });

document.addEventListener('DOMContentLoaded', function() {

    let form = document.getElementById('loginform');
    form.addEventListener('submit', function addLink (event) {
    
        event.preventDefault();
    
        let headerlinks = document.getElementById('headertitles'); // KEEP THIS IN ADD LINK
    
        let addEntryDiv = document.createElement('div');
        addEntryDiv.className = "headeraddentry";
        
        let addEntryItem = document.createElement('li');
        
        let addEntryLinkToPHPFile = document.createElement('a');
        addEntryLinkToPHPFile.href = "./addEntry.php";
        addEntryLinkToPHPFile.textContent = 'Add Entry';
        
        addEntryItem.appendChild(addEntryLinkToPHPFile);
        console.log(addEntryItem);
    
        addEntryDiv.appendChild(addEntryItem);
        console.log(addEntryDiv);
    
        headerlinks.appendChild(addEntryDiv);
        console.log(headerlinks);
    });

});
