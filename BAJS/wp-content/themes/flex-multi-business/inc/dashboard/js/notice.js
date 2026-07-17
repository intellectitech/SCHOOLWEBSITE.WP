jQuery("body").on("click", '#flex-multi-business-welcome-notice .notice-dismiss', function (event) {
    event.preventDefault();

    console.log("close clicked");

    jQuery.ajax({
      type: 'POST',
      url: ajaxurl,
      data: {
          action: 'flex_multi_business_dismissed_notice',
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
    const flex_multi_business_couponBtn = document.getElementById('copyCouponBtn');
    const flex_multi_business_tooltip = document.getElementById('copyTooltip');

    flex_multi_business_couponBtn.addEventListener('click', function (e) {
        navigator.clipboard.writeText('FLEXPRO').then(function () {

            flex_multi_business_tooltip.style.left = (e.clientX + 10) + 'px';
            flex_multi_business_tooltip.style.top = (e.clientY + 10) + 'px';
            flex_multi_business_tooltip.style.display = 'block';

            setTimeout(function () {
                flex_multi_business_tooltip.style.display = 'none';
            }, 1500);
        });
    });
});