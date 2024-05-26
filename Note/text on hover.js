=====versi simple

selector{
  opacity: 0;
  transition: 0.5s ease-in-out;
}
selector:hover{
  opacity: 1;
}

======================================



<script>

document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('selector'); 
    elements.forEach(element => {
      element.style.opacity = 0;
      element.style.transition = 'opacity 0.5s ease-in-out';
  
      element.addEventListener('mouseover', () => {
        element.style.opacity = 1;
      });
  
      element.addEventListener('mouseout', () => {
        element.style.opacity = 0;
      });
    });
  });

</script>