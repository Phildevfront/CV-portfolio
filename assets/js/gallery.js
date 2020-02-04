
document.addEventListener("DOMContentLoaded", function(event){

    console.log('loaded');
  
    const groups = [
  
        {
          id: 1,
          titre:"CMS WORDPRESS",
          comments:"Jessie Nottola",
          img:"https://i.goopics.net/GD7xd.jpg"
          
        },
        {
          id: 2,
          titre:"CMS WORDPRESS",
          comments:"ORSC",
          img:"https://i.goopics.net/XLEjq.jpg"
        },
        {
          id: 3,
          titre:"HTML/CSS",
          comments:"Visite de L'Alhambra",
          img:"https://i.goopics.net/wN8a9.jpg"
        },
        {
          id: 4,
          titre:"CMS WORDPRESS",
          comments:"Jessie Nottola",
          img:"https://i.goopics.net/GD7xd.jpg"
        },
        {
          id: 5,
          titre:"CMS WORDPRESS",
          comments:"ORSC",
          img:"https://i.goopics.net/XLEjq.jpg"
        },
        {
          id: 6,
          titre:"HTML/CSS",
          comments:"Visite de L'Alhambra",
          img:"https://i.goopics.net/wN8a9.jpg"
        }
  
    ];

    []
  
        for(let i = 0 ; i < groups.length ; i++) {
  
  
          const group = document.getElementById('group')
          const article = document.getElementsByClassName('article')[0]
          const clone = article.cloneNode(true)
          clone.id = 'member' + groups[i].id.toString()
  
          const title = document.createElement("h2");
          title.innerHTML = groups[i].titre
  
          const comments = document.createElement("h3")
          comments.innerHTML = groups[i].comments
  
          const elemimg = document.createElement("img");// créer nvelle element image ds variable
          elemimg.src = groups[i].img
  
          clone.appendChild(elemimg);
          clone.appendChild(title);
          clone.appendChild(comments);
          group.appendChild(clone);
          clone.classList.remove('hidden');
  
  
        }
  
  });