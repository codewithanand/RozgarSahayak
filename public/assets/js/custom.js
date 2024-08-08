$('.callcollapse').on('click', function()
{
  $('.collapseNav').css('transform', 'translateX(0)')
})
$('.hidecollapse').on('click', function()
{
  $('.collapseNav').css('transform', 'translateX(100%)')
})


$(".playbtn i").on('click',function()
{
  $('.sliderVideos').css('display', 'block')
  $('.sliderVideos iframe').css('display', 'block')
})
$('.sliderVideos i').on('click', function()
{
  $('.sliderVideos').css('display', 'none')
  $('.sliderVideos iframe').css('display', 'none')

})


//Range
var slider = document.getElementById("bar");

slider.onchange = function() {
}

slider.oninput = function()
{
  var value = (this.value-this.min)/(this.max-this.min)*100
  console.log(this.value-this.min);
  console.log(this.max-this.min);
  this.style.background = 'linear-gradient(to right, var(--primary-color) 0%, var(--primary-color) ' + value + '%, var(--secondary-color) ' + value + '%, var(--secondary-color) 100%)';
  
  var activeIndex = Math.trunc(this.value - this.min);
  $('.rangeNumber .number').removeClass('active');
  $('.rangeNumber .number').eq(activeIndex).addClass('active');

  if(activeIndex < 4)
  {
    $('.thumbsingle').removeClass('shake')
    $('.thumbsingle').eq(0).addClass('shake')
  }
  else if(activeIndex > 4)
  {
    $('.thumbsingle').removeClass('shake')
    $('.thumbsingle').eq(1).addClass('shake')
  }
};