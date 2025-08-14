
  function filterProducts(category) {
    const cards = document.querySelectorAll('.product-card');
    cards.forEach(card => {
      const cat = card.getAttribute('data-category');
      if (category === 'all' || cat === category) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });

    // تفعيل الزر المختار
    const buttons = document.querySelectorAll('.btn-group .btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
  }

