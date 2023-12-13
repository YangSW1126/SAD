(function() {

    document.querySelector('.nav-button').addEventListener('mouseover', function() {

      this.parentNode.parentNode.classList.toggle('closed')
    }, false);
  })();