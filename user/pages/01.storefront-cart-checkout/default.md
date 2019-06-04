---
title: Storefront Cart & Checkout Overview
page-toc:
    active: true
---

# Cart and Checkout
The Storefront APIs are for managing the contents of a shopper’s cart and checkout using JavaScript in the context of a storefront session.

## When to Use the Storefront APIs
* Analytics and Tracking
* Retrieving cart data client-side
* Quick Order Form
* Upsell applications

---

## Using the Fetch API
The Fetch API is an alternative to XMLHttpRequest for making http requests in JavaScript. You can use the Fetch API to interact with the Storefront APIs and return a shopper’s cart, checkout or order.

Fetch API is supported by most modern browsers, but it is not supported in Internet Explorer. We recommend using a Polyfill for Internet Explorer 10+ and XMLHttpRequest for earlier versions.

To learn more about using the Fetch API with the Storefront see our tutorial here.

You can run fetch requests from the browser console to test, or you can use the Scripts API to add inject JavaScript into your theme’s footer.

** Log Cart Details to the Console**

```javascript
<script>
console.log('Log Cart');
fetch('/api/storefront/cart', {
  credentials: 'include'
}).then(function(response) {
  return response.json();
}).then(function(myJson) {
  console.log(myJson);
});
</script>
```