Drupal.behaviors.coinToss = {
  attach(context) {
    function handleClick() {
      this.classList.add('boing');
    }

    const coinButton = Array.from(context.querySelectorAll('.coin-button'));

    coinButton.forEach((coin) => coin.addEventListener('click', handleClick));
  },
};
