jQuery("body").on("click", '#flex-education-welcome-notice .notice-dismiss', function (event) {
    event.preventDefault();

    console.log("close clicked");

    jQuery.ajax({
      type: 'POST',
      url: ajaxurl,
      data: {
          action: 'flex_education_dismissed_notice',
      },
      success: function () {
          // Remove the notice on success
          $('.notice[data-notice="example"]').remove();
      }
    });
  }
)

//Coupon Code
document.addEventListener('DOMContentLoaded', function () {
    const flex_education_couponBtn = document.getElementById('copyCouponBtn');
    const flex_education_tooltip = document.getElementById('copyTooltip');

    flex_education_couponBtn.addEventListener('click', function (e) {
        navigator.clipboard.writeText('FLEXPRO').then(function () {

            flex_education_tooltip.style.left = (e.clientX + 10) + 'px';
            flex_education_tooltip.style.top = (e.clientY + 10) + 'px';
            flex_education_tooltip.style.display = 'block';

            setTimeout(function () {
                flex_education_tooltip.style.display = 'none';
            }, 1500);
        });
    });
});