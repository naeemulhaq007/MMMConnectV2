<!DOCTYPE html>
<html lang="en">
<head>
	<style>
          html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  font-family: sans-serif;
}

body {
  margin: 0;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

audio, canvas, progress, video {
  vertical-align: baseline;
  display: inline-block;
}

audio:not([controls]) {
  height: 0;
  display: none;
}

[hidden], template {
  display: none;
}

a {
  background-color: rgba(0, 0, 0, 0);
}

a:active, a:hover {
  outline: 0;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b, strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

h1 {
  margin: .67em 0;
  font-size: 2em;
}

mark {
  color: #000;
  background: #ff0;
}

small {
  font-size: 80%;
}

sub, sup {
  vertical-align: baseline;
  font-size: 75%;
  line-height: 0;
  position: relative;
}

sup {
  top: -.5em;
}

sub {
  bottom: -.25em;
}

img {
  border: 0;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 1em 40px;
}

hr {
  box-sizing: content-box;
  height: 0;
}

pre {
  overflow: auto;
}

code, kbd, pre, samp {
  font-family: monospace;
  font-size: 1em;
}

button, input, optgroup, select, textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, html input[type="button"], input[type="reset"] {
  -webkit-appearance: button;
  cursor: pointer;
}

button[disabled], html input[disabled] {
  cursor: default;
}

button::-moz-focus-inner, input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input {
  line-height: normal;
}

input[type="checkbox"], input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

input[type="search"] {
  -webkit-appearance: none;
}

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

fieldset {
  border: 1px solid silver;
  margin: 0 2px;
  padding: .35em .625em .75em;
}

legend {
  border: 0;
  padding: 0;
}

textarea {
  overflow: auto;
}

optgroup {
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td, th {
  padding: 0;
}

@font-face {
  font-family: webflow-icons;
  src: url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBiUAAAC8AAAAYGNtYXDpP+a4AAABHAAAAFxnYXNwAAAAEAAAAXgAAAAIZ2x5ZmhS2XEAAAGAAAADHGhlYWQTFw3HAAAEnAAAADZoaGVhCXYFgQAABNQAAAAkaG10eCe4A1oAAAT4AAAAMGxvY2EDtALGAAAFKAAAABptYXhwABAAPgAABUQAAAAgbmFtZSoCsMsAAAVkAAABznBvc3QAAwAAAAAHNAAAACAAAwP4AZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpAwPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAQAAAAAwACAACAAQAAQAg5gPpA//9//8AAAAAACDmAOkA//3//wAB/+MaBBcIAAMAAQAAAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEBIAAAAyADgAAFAAAJAQcJARcDIP5AQAGA/oBAAcABwED+gP6AQAABAOAAAALgA4AABQAAEwEXCQEH4AHAQP6AAYBAAcABwED+gP6AQAAAAwDAAOADQALAAA8AHwAvAAABISIGHQEUFjMhMjY9ATQmByEiBh0BFBYzITI2PQE0JgchIgYdARQWMyEyNj0BNCYDIP3ADRMTDQJADRMTDf3ADRMTDQJADRMTDf3ADRMTDQJADRMTAsATDSANExMNIA0TwBMNIA0TEw0gDRPAEw0gDRMTDSANEwAAAAABAJ0AtAOBApUABQAACQIHCQEDJP7r/upcAXEBcgKU/usBFVz+fAGEAAAAAAL//f+9BAMDwwAEAAkAABcBJwEXAwE3AQdpA5ps/GZsbAOabPxmbEMDmmz8ZmwDmvxmbAOabAAAAgAA/8AEAAPAAB0AOwAABSInLgEnJjU0Nz4BNzYzMTIXHgEXFhUUBw4BBwYjNTI3PgE3NjU0Jy4BJyYjMSIHDgEHBhUUFx4BFxYzAgBqXV6LKCgoKIteXWpqXV6LKCgoKIteXWpVSktvICEhIG9LSlVVSktvICEhIG9LSlVAKCiLXl1qal1eiygoKCiLXl1qal1eiygoZiEgb0tKVVVKS28gISEgb0tKVVVKS28gIQABAAABwAIAA8AAEgAAEzQ3PgE3NjMxFSIHDgEHBhUxIwAoKIteXWpVSktvICFmAcBqXV6LKChmISBvS0pVAAAAAgAA/8AFtgPAADIAOgAAARYXHgEXFhUUBw4BBwYHIxUhIicuAScmNTQ3PgE3NjMxOAExNDc+ATc2MzIXHgEXFhcVATMJATMVMzUEjD83NlAXFxYXTjU1PQL8kz01Nk8XFxcXTzY1PSIjd1BQWlJJSXInJw3+mdv+2/7c25MCUQYcHFg5OUA/ODlXHBwIAhcXTzY1PTw1Nk8XF1tQUHcjIhwcYUNDTgL+3QFt/pOTkwABAAAAAQAAmM7nP18PPPUACwQAAAAAANciZKUAAAAA1yJkpf/9/70FtgPDAAAACAACAAAAAAAAAAEAAAPA/8AAAAW3//3//QW2AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAASAEAADgBAAAwAQAAJ0EAP/9BAAAAAQAAAAFtwAAAAAAAAAKABQAHgAyAEYAjACiAL4BFgE2AY4AAAABAAAADAA8AAMAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEADQAAAAEAAAAAAAIABwCWAAEAAAAAAAMADQBIAAEAAAAAAAQADQCrAAEAAAAAAAUACwAnAAEAAAAAAAYADQBvAAEAAAAAAAoAGgDSAAMAAQQJAAEAGgANAAMAAQQJAAIADgCdAAMAAQQJAAMAGgBVAAMAAQQJAAQAGgC4AAMAAQQJAAUAFgAyAAMAAQQJAAYAGgB8AAMAAQQJAAoANADsd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzUmVndWxhcgBSAGUAZwB1AGwAYQByd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format("truetype");
  font-weight: normal;
  font-style: normal;
}

[class^="w-icon-"], [class*=" w-icon-"] {
  speak: none;
  font-variant: normal;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  font-family: webflow-icons !important;
}

.w-icon-slider-right:before {
  content: "";
}

.w-icon-slider-left:before {
  content: "";
}

.w-icon-nav-menu:before {
  content: "";
}

.w-icon-arrow-down:before, .w-icon-dropdown-toggle:before {
  content: "";
}

.w-icon-file-upload-remove:before {
  content: "";
}

.w-icon-file-upload-icon:before {
  content: "";
}

* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  min-height: 100%;
  color: #333;
  background-color: #fff;
  margin: 0;
  font-family: Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
}

img {
  max-width: 100%;
  vertical-align: middle;
  display: inline-block;
}

html.w-mod-touch * {
  background-attachment: scroll !important;
}

.w-block {
  display: block;
}

.w-inline-block {
  max-width: 100%;
  display: inline-block;
}

.w-clearfix:before, .w-clearfix:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-clearfix:after {
  clear: both;
}

.w-hidden {
  display: none;
}

.w-button {
  color: #fff;
  line-height: inherit;
  cursor: pointer;
  background-color: #3898ec;
  border: 0;
  border-radius: 0;
  padding: 9px 15px;
  text-decoration: none;
  display: inline-block;
}

input.w-button {
  -webkit-appearance: button;
}

html[data-w-dynpage] [data-w-cloak] {
  color: rgba(0, 0, 0, 0) !important;
}

.w-code-block {
  margin: unset;
}

pre.w-code-block code {
  all: inherit;
}

.w-webflow-badge, .w-webflow-badge * {
  z-index: auto;
  visibility: visible;
  box-sizing: border-box;
  width: auto;
  height: auto;
  max-height: none;
  max-width: none;
  min-height: 0;
  min-width: 0;
  float: none;
  clear: none;
  box-shadow: none;
  opacity: 1;
  direction: ltr;
  font-family: inherit;
  font-weight: inherit;
  color: inherit;
  font-size: inherit;
  line-height: inherit;
  font-style: inherit;
  font-variant: inherit;
  text-align: inherit;
  letter-spacing: inherit;
  -webkit-text-decoration: inherit;
  text-decoration: inherit;
  text-indent: 0;
  text-transform: inherit;
  text-shadow: none;
  font-smoothing: auto;
  vertical-align: baseline;
  cursor: inherit;
  white-space: inherit;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  background: none;
  border: 0 rgba(0, 0, 0, 0);
  border-radius: 0;
  margin: 0;
  padding: 0;
  list-style-type: disc;
  transition: none;
  display: block;
  position: static;
  top: auto;
  bottom: auto;
  left: auto;
  right: auto;
  overflow: visible;
  transform: none;
}

.w-webflow-badge {
  white-space: nowrap;
  cursor: pointer;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .1);
  visibility: visible !important;
  z-index: 2147483647 !important;
  color: #aaadb0 !important;
  opacity: 1 !important;
  width: auto !important;
  height: auto !important;
  background-color: #fff !important;
  border-radius: 3px !important;
  margin: 0 !important;
  padding: 6px !important;
  font-size: 12px !important;
  line-height: 14px !important;
  text-decoration: none !important;
  display: inline-block !important;
  position: fixed !important;
  top: auto !important;
  bottom: 12px !important;
  left: auto !important;
  right: 12px !important;
  overflow: visible !important;
  transform: none !important;
}

.w-webflow-badge > img {
  visibility: visible !important;
  opacity: 1 !important;
  vertical-align: middle !important;
  display: inline-block !important;
}

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 10px;
  font-weight: bold;
}

h1 {
  margin-top: 20px;
  font-size: 38px;
  line-height: 44px;
}

h2 {
  margin-top: 20px;
  font-size: 32px;
  line-height: 36px;
}

h3 {
  margin-top: 20px;
  font-size: 24px;
  line-height: 30px;
}

h4 {
  margin-top: 10px;
  font-size: 18px;
  line-height: 24px;
}

h5 {
  margin-top: 10px;
  font-size: 14px;
  line-height: 20px;
}

h6 {
  margin-top: 10px;
  font-size: 12px;
  line-height: 18px;
}

p {
  margin-top: 0;
  margin-bottom: 10px;
}

blockquote {
  border-left: 5px solid #e2e2e2;
  margin: 0 0 10px;
  padding: 10px 20px;
  font-size: 18px;
  line-height: 22px;
}

figure {
  margin: 0 0 10px;
}

figcaption {
  text-align: center;
  margin-top: 5px;
}

ul, ol {
  margin-top: 0;
  margin-bottom: 10px;
  padding-left: 40px;
}

.w-list-unstyled {
  padding-left: 0;
  list-style: none;
}

.w-embed:before, .w-embed:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-embed:after {
  clear: both;
}

.w-video {
  width: 100%;
  padding: 0;
  position: relative;
}

.w-video iframe, .w-video object, .w-video embed {
  width: 100%;
  height: 100%;
  border: none;
  position: absolute;
  top: 0;
  left: 0;
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

button, [type="button"], [type="reset"] {
  cursor: pointer;
  -webkit-appearance: button;
  border: 0;
}

.w-form {
  margin: 0 0 15px;
}

.w-form-done {
  text-align: center;
  background-color: #ddd;
  padding: 20px;
  display: none;
}

.w-form-fail {
  background-color: #ffdede;
  margin-top: 10px;
  padding: 10px;
  display: none;
}

label {
  margin-bottom: 5px;
  font-weight: bold;
  display: block;
}

.w-input, .w-select {
  width: 100%;
  height: 38px;
  color: #333;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  padding: 8px 12px;
  font-size: 14px;
  line-height: 1.42857;
  display: block;
}

.w-input:-moz-placeholder, .w-select:-moz-placeholder {
  color: #999;
}

.w-input::-moz-placeholder, .w-select::-moz-placeholder {
  color: #999;
  opacity: 1;
}

.w-input::-webkit-input-placeholder, .w-select::-webkit-input-placeholder {
  color: #999;
}

.w-input:focus, .w-select:focus {
  border-color: #3898ec;
  outline: 0;
}

.w-input[disabled], .w-select[disabled], .w-input[readonly], .w-select[readonly], fieldset[disabled] .w-input, fieldset[disabled] .w-select {
  cursor: not-allowed;
}

.w-input[disabled]:not(.w-input-disabled), .w-select[disabled]:not(.w-input-disabled), .w-input[readonly], .w-select[readonly], fieldset[disabled]:not(.w-input-disabled) .w-input, fieldset[disabled]:not(.w-input-disabled) .w-select {
  background-color: #eee;
}

textarea.w-input, textarea.w-select {
  height: auto;
}

.w-select {
  background-color: #f3f3f3;
}

.w-select[multiple] {
  height: auto;
}

.w-form-label {
  cursor: pointer;
  margin-bottom: 0;
  font-weight: normal;
  display: inline-block;
}

.w-radio {
  margin-bottom: 5px;
  padding-left: 20px;
  display: block;
}

.w-radio:before, .w-radio:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-radio:after {
  clear: both;
}

.w-radio-input {
  float: left;
  margin: 3px 0 0 -20px;
  line-height: normal;
}

.w-file-upload {
  margin-bottom: 10px;
  display: block;
}

.w-file-upload-input {
  width: .1px;
  height: .1px;
  opacity: 0;
  z-index: -100;
  position: absolute;
  overflow: hidden;
}

.w-file-upload-default, .w-file-upload-uploading, .w-file-upload-success {
  color: #333;
  display: inline-block;
}

.w-file-upload-error {
  margin-top: 10px;
  display: block;
}

.w-file-upload-default.w-hidden, .w-file-upload-uploading.w-hidden, .w-file-upload-error.w-hidden, .w-file-upload-success.w-hidden {
  display: none;
}

.w-file-upload-uploading-btn {
  cursor: pointer;
  background-color: #fafafa;
  border: 1px solid #ccc;
  margin: 0;
  padding: 8px 12px;
  font-size: 14px;
  font-weight: normal;
  display: flex;
}

.w-file-upload-file {
  background-color: #fafafa;
  border: 1px solid #ccc;
  flex-grow: 1;
  justify-content: space-between;
  margin: 0;
  padding: 8px 9px 8px 11px;
  display: flex;
}

.w-file-upload-file-name {
  font-size: 14px;
  font-weight: normal;
  display: block;
}

.w-file-remove-link {
  width: auto;
  height: auto;
  cursor: pointer;
  margin-top: 3px;
  margin-left: 10px;
  padding: 3px;
  display: block;
}

.w-icon-file-upload-remove {
  margin: auto;
  font-size: 10px;
}

.w-file-upload-error-msg {
  color: #ea384c;
  padding: 2px 0;
  display: inline-block;
}

.w-file-upload-info {
  padding: 0 12px;
  line-height: 38px;
  display: inline-block;
}

.w-file-upload-label {
  cursor: pointer;
  background-color: #fafafa;
  border: 1px solid #ccc;
  margin: 0;
  padding: 8px 12px;
  font-size: 14px;
  font-weight: normal;
  display: inline-block;
}

.w-icon-file-upload-icon, .w-icon-file-upload-uploading {
  width: 20px;
  margin-right: 8px;
  display: inline-block;
}

.w-icon-file-upload-uploading {
  height: 20px;
}

.w-container {
  max-width: 940px;
  margin-left: auto;
  margin-right: auto;
}

.w-container:before, .w-container:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-container:after {
  clear: both;
}

.w-container .w-row {
  margin-left: -10px;
  margin-right: -10px;
}

.w-row:before, .w-row:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-row:after {
  clear: both;
}

.w-row .w-row {
  margin-left: 0;
  margin-right: 0;
}

.w-col {
  float: left;
  width: 100%;
  min-height: 1px;
  padding-left: 10px;
  padding-right: 10px;
  position: relative;
}

.w-col .w-col {
  padding-left: 0;
  padding-right: 0;
}

.w-col-1 {
  width: 8.33333%;
}

.w-col-2 {
  width: 16.6667%;
}

.w-col-3 {
  width: 25%;
}

.w-col-4 {
  width: 33.3333%;
}

.w-col-5 {
  width: 41.6667%;
}

.w-col-6 {
  width: 50%;
}

.w-col-7 {
  width: 58.3333%;
}

.w-col-8 {
  width: 66.6667%;
}

.w-col-9 {
  width: 75%;
}

.w-col-10 {
  width: 83.3333%;
}

.w-col-11 {
  width: 91.6667%;
}

.w-col-12 {
  width: 100%;
}

.w-hidden-main {
  display: none !important;
}

@media screen and (max-width: 991px) {
  .w-container {
    max-width: 728px;
  }

  .w-hidden-main {
    display: inherit !important;
  }

  .w-hidden-medium {
    display: none !important;
  }

  .w-col-medium-1 {
    width: 8.33333%;
  }

  .w-col-medium-2 {
    width: 16.6667%;
  }

  .w-col-medium-3 {
    width: 25%;
  }

  .w-col-medium-4 {
    width: 33.3333%;
  }

  .w-col-medium-5 {
    width: 41.6667%;
  }

  .w-col-medium-6 {
    width: 50%;
  }

  .w-col-medium-7 {
    width: 58.3333%;
  }

  .w-col-medium-8 {
    width: 66.6667%;
  }

  .w-col-medium-9 {
    width: 75%;
  }

  .w-col-medium-10 {
    width: 83.3333%;
  }

  .w-col-medium-11 {
    width: 91.6667%;
  }

  .w-col-medium-12 {
    width: 100%;
  }

  .w-col-stack {
    width: 100%;
    left: auto;
    right: auto;
  }
}

@media screen and (max-width: 767px) {
  .w-hidden-main, .w-hidden-medium {
    display: inherit !important;
  }

  .w-hidden-small {
    display: none !important;
  }

  .w-row, .w-container .w-row {
    margin-left: 0;
    margin-right: 0;
  }

  .w-col {
    width: 100%;
    left: auto;
    right: auto;
  }

  .w-col-small-1 {
    width: 8.33333%;
  }

  .w-col-small-2 {
    width: 16.6667%;
  }

  .w-col-small-3 {
    width: 25%;
  }

  .w-col-small-4 {
    width: 33.3333%;
  }

  .w-col-small-5 {
    width: 41.6667%;
  }

  .w-col-small-6 {
    width: 50%;
  }

  .w-col-small-7 {
    width: 58.3333%;
  }

  .w-col-small-8 {
    width: 66.6667%;
  }

  .w-col-small-9 {
    width: 75%;
  }

  .w-col-small-10 {
    width: 83.3333%;
  }

  .w-col-small-11 {
    width: 91.6667%;
  }

  .w-col-small-12 {
    width: 100%;
  }
}

@media screen and (max-width: 479px) {
  .w-container {
    max-width: none;
  }

  .w-hidden-main, .w-hidden-medium, .w-hidden-small {
    display: inherit !important;
  }

  .w-hidden-tiny {
    display: none !important;
  }

  .w-col {
    width: 100%;
  }

  .w-col-tiny-1 {
    width: 8.33333%;
  }

  .w-col-tiny-2 {
    width: 16.6667%;
  }

  .w-col-tiny-3 {
    width: 25%;
  }

  .w-col-tiny-4 {
    width: 33.3333%;
  }

  .w-col-tiny-5 {
    width: 41.6667%;
  }

  .w-col-tiny-6 {
    width: 50%;
  }

  .w-col-tiny-7 {
    width: 58.3333%;
  }

  .w-col-tiny-8 {
    width: 66.6667%;
  }

  .w-col-tiny-9 {
    width: 75%;
  }

  .w-col-tiny-10 {
    width: 83.3333%;
  }

  .w-col-tiny-11 {
    width: 91.6667%;
  }

  .w-col-tiny-12 {
    width: 100%;
  }
}

.w-widget {
  position: relative;
}

.w-widget-map {
  width: 100%;
  height: 400px;
}

.w-widget-map label {
  width: auto;
  display: inline;
}

.w-widget-map img {
  max-width: inherit;
}

.w-widget-map .gm-style-iw {
  text-align: center;
}

.w-widget-map .gm-style-iw > button {
  display: none !important;
}

.w-widget-twitter {
  overflow: hidden;
}

.w-widget-twitter-count-shim {
  vertical-align: top;
  width: 28px;
  height: 20px;
  text-align: center;
  background: #fff;
  border: 1px solid #758696;
  border-radius: 3px;
  display: inline-block;
  position: relative;
}

.w-widget-twitter-count-shim * {
  pointer-events: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.w-widget-twitter-count-shim .w-widget-twitter-count-inner {
  text-align: center;
  color: #999;
  font-family: serif;
  font-size: 15px;
  line-height: 12px;
  position: relative;
}

.w-widget-twitter-count-shim .w-widget-twitter-count-clear {
  display: block;
  position: relative;
}

.w-widget-twitter-count-shim.w--large {
  width: 36px;
  height: 28px;
}

.w-widget-twitter-count-shim.w--large .w-widget-twitter-count-inner {
  font-size: 18px;
  line-height: 18px;
}

.w-widget-twitter-count-shim:not(.w--vertical) {
  margin-left: 5px;
  margin-right: 8px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large {
  margin-left: 6px;
}

.w-widget-twitter-count-shim:not(.w--vertical):before, .w-widget-twitter-count-shim:not(.w--vertical):after {
  content: " ";
  height: 0;
  width: 0;
  pointer-events: none;
  border: solid rgba(0, 0, 0, 0);
  position: absolute;
  top: 50%;
  left: 0;
}

.w-widget-twitter-count-shim:not(.w--vertical):before {
  border-width: 4px;
  border-color: rgba(117, 134, 150, 0) #5d6c7b rgba(117, 134, 150, 0) rgba(117, 134, 150, 0);
  margin-top: -4px;
  margin-left: -9px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large:before {
  border-width: 5px;
  margin-top: -5px;
  margin-left: -10px;
}

.w-widget-twitter-count-shim:not(.w--vertical):after {
  border-width: 4px;
  border-color: rgba(255, 255, 255, 0) #fff rgba(255, 255, 255, 0) rgba(255, 255, 255, 0);
  margin-top: -4px;
  margin-left: -8px;
}

.w-widget-twitter-count-shim:not(.w--vertical).w--large:after {
  border-width: 5px;
  margin-top: -5px;
  margin-left: -9px;
}

.w-widget-twitter-count-shim.w--vertical {
  width: 61px;
  height: 33px;
  margin-bottom: 8px;
}

.w-widget-twitter-count-shim.w--vertical:before, .w-widget-twitter-count-shim.w--vertical:after {
  content: " ";
  height: 0;
  width: 0;
  pointer-events: none;
  border: solid rgba(0, 0, 0, 0);
  position: absolute;
  top: 100%;
  left: 50%;
}

.w-widget-twitter-count-shim.w--vertical:before {
  border-width: 5px;
  border-color: #5d6c7b rgba(117, 134, 150, 0) rgba(117, 134, 150, 0);
  margin-left: -5px;
}

.w-widget-twitter-count-shim.w--vertical:after {
  border-width: 4px;
  border-color: #fff rgba(255, 255, 255, 0) rgba(255, 255, 255, 0);
  margin-left: -4px;
}

.w-widget-twitter-count-shim.w--vertical .w-widget-twitter-count-inner {
  font-size: 18px;
  line-height: 22px;
}

.w-widget-twitter-count-shim.w--vertical.w--large {
  width: 76px;
}

.w-background-video {
  height: 500px;
  color: #fff;
  position: relative;
  overflow: hidden;
}

.w-background-video > video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -100;
  background-position: 50%;
  background-size: cover;
  margin: auto;
  position: absolute;
  top: -100%;
  bottom: -100%;
  left: -100%;
  right: -100%;
}

.w-background-video > video::-webkit-media-controls-start-playback-button {
  -webkit-appearance: none;
  display: none !important;
}

.w-background-video--control {
  background-color: rgba(0, 0, 0, 0);
  padding: 0;
  position: absolute;
  bottom: 1em;
  right: 1em;
}

.w-background-video--control > [hidden] {
  display: none !important;
}

.w-slider {
  height: 300px;
  text-align: center;
  clear: both;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  tap-highlight-color: rgba(0, 0, 0, 0);
  background: #ddd;
  position: relative;
}

.w-slider-mask {
  z-index: 1;
  height: 100%;
  white-space: nowrap;
  display: block;
  position: relative;
  left: 0;
  right: 0;
  overflow: hidden;
}

.w-slide {
  vertical-align: top;
  width: 100%;
  height: 100%;
  white-space: normal;
  text-align: left;
  display: inline-block;
  position: relative;
}

.w-slider-nav {
  z-index: 2;
  height: 40px;
  text-align: center;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  tap-highlight-color: rgba(0, 0, 0, 0);
  margin: auto;
  padding-top: 10px;
  position: absolute;
  top: auto;
  bottom: 0;
  left: 0;
  right: 0;
}

.w-slider-nav.w-round > div {
  border-radius: 100%;
}

.w-slider-nav.w-num > div {
  width: auto;
  height: auto;
  font-size: inherit;
  line-height: inherit;
  padding: .2em .5em;
}

.w-slider-nav.w-shadow > div {
  box-shadow: 0 0 3px rgba(51, 51, 51, .4);
}

.w-slider-nav-invert {
  color: #fff;
}

.w-slider-nav-invert > div {
  background-color: rgba(34, 34, 34, .4);
}

.w-slider-nav-invert > div.w-active {
  background-color: #222;
}

.w-slider-dot {
  width: 1em;
  height: 1em;
  cursor: pointer;
  background-color: rgba(255, 255, 255, .4);
  margin: 0 3px .5em;
  transition: background-color .1s, color .1s;
  display: inline-block;
  position: relative;
}

.w-slider-dot.w-active {
  background-color: #fff;
}

.w-slider-dot:focus {
  outline: none;
  box-shadow: 0 0 0 2px #fff;
}

.w-slider-dot:focus.w-active {
  box-shadow: none;
}

.w-slider-arrow-left, .w-slider-arrow-right {
  width: 80px;
  cursor: pointer;
  color: #fff;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin: auto;
  font-size: 40px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}

.w-slider-arrow-left [class^="w-icon-"], .w-slider-arrow-right [class^="w-icon-"], .w-slider-arrow-left [class*=" w-icon-"], .w-slider-arrow-right [class*=" w-icon-"] {
  position: absolute;
}

.w-slider-arrow-left:focus, .w-slider-arrow-right:focus {
  outline: 0;
}

.w-slider-arrow-left {
  z-index: 3;
  right: auto;
}

.w-slider-arrow-right {
  z-index: 4;
  left: auto;
}

.w-icon-slider-left, .w-icon-slider-right {
  width: 1em;
  height: 1em;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.w-slider-aria-label {
  clip: rect(0 0 0 0);
  height: 1px;
  width: 1px;
  border: 0;
  margin: -1px;
  padding: 0;
  position: absolute;
  overflow: hidden;
}

.w-slider-force-show {
  display: block !important;
}

.w-dropdown {
  text-align: left;
  z-index: 900;
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
  position: relative;
}

.w-dropdown-btn, .w-dropdown-toggle, .w-dropdown-link {
  vertical-align: top;
  color: #222;
  text-align: left;
  white-space: nowrap;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  text-decoration: none;
  position: relative;
}

.w-dropdown-toggle {
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
  padding-right: 40px;
  display: inline-block;
}

.w-dropdown-toggle:focus {
  outline: 0;
}

.w-icon-dropdown-toggle {
  width: 1em;
  height: 1em;
  margin: auto 20px auto auto;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
}

.w-dropdown-list {
  min-width: 100%;
  background: #ddd;
  display: none;
  position: absolute;
}

.w-dropdown-list.w--open {
  display: block;
}

.w-dropdown-link {
  color: #222;
  padding: 10px 20px;
  display: block;
}

.w-dropdown-link.w--current {
  color: #0082f3;
}

.w-dropdown-link:focus {
  outline: 0;
}

@media screen and (max-width: 767px) {
  .w-nav-brand {
    padding-left: 10px;
  }
}

.w-lightbox-backdrop {
  cursor: auto;
  letter-spacing: normal;
  text-indent: 0;
  text-shadow: none;
  text-transform: none;
  visibility: visible;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  color: #fff;
  text-align: center;
  z-index: 2000;
  opacity: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -webkit-tap-highlight-color: transparent;
  background: rgba(0, 0, 0, .9);
  outline: 0;
  font-family: Helvetica Neue, Helvetica, Ubuntu, Segoe UI, Verdana, sans-serif;
  font-size: 17px;
  font-style: normal;
  font-weight: 300;
  line-height: 1.2;
  list-style: disc;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  -webkit-transform: translate(0);
}

.w-lightbox-backdrop, .w-lightbox-container {
  height: 100%;
  -webkit-overflow-scrolling: touch;
  overflow: auto;
}

.w-lightbox-content {
  height: 100vh;
  position: relative;
  overflow: hidden;
}

.w-lightbox-view {
  width: 100vw;
  height: 100vh;
  opacity: 0;
  position: absolute;
}

.w-lightbox-view:before {
  content: "";
  height: 100vh;
}

.w-lightbox-group, .w-lightbox-group .w-lightbox-view, .w-lightbox-group .w-lightbox-view:before {
  height: 86vh;
}

.w-lightbox-frame, .w-lightbox-view:before {
  vertical-align: middle;
  display: inline-block;
}

.w-lightbox-figure {
  margin: 0;
  position: relative;
}

.w-lightbox-group .w-lightbox-figure {
  cursor: pointer;
}

.w-lightbox-img {
  width: auto;
  height: auto;
  max-width: none;
}

.w-lightbox-image {
  float: none;
  max-width: 100vw;
  max-height: 100vh;
  display: block;
}

.w-lightbox-group .w-lightbox-image {
  max-height: 86vh;
}

.w-lightbox-caption {
  text-align: left;
  text-overflow: ellipsis;
  white-space: nowrap;
  background: rgba(0, 0, 0, .4);
  padding: .5em 1em;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}

.w-lightbox-embed {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.w-lightbox-control {
  width: 4em;
  cursor: pointer;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 24px;
  transition: all .3s;
  position: absolute;
  top: 0;
}

.w-lightbox-left {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMCAwIDI0IDQwIiB3aWR0aD0iMjQiIGhlaWdodD0iNDAiPjxnIHRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHBhdGggZD0ibTAgMGg1djIzaDIzdjVoLTI4eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDN2MjNoMjN2M2gtMjZ6IiBmaWxsPSIjZmZmIi8+PC9nPjwvc3ZnPg==");
  display: none;
  bottom: 0;
  left: 0;
}

.w-lightbox-right {
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMjQgNDAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0MCI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMC0waDI4djI4aC01di0yM2gtMjN6IiBvcGFjaXR5PSIuNCIvPjxwYXRoIGQ9Im0xIDFoMjZ2MjZoLTN2LTIzaC0yM3oiIGZpbGw9IiNmZmYiLz48L2c+PC9zdmc+");
  display: none;
  bottom: 0;
  right: 0;
}

.w-lightbox-close {
  height: 2.6em;
  background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMTggMTciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMCAwaDd2LTdoNXY3aDd2NWgtN3Y3aC01di03aC03eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDd2LTdoM3Y3aDd2M2gtN3Y3aC0zdi03aC03eiIgZmlsbD0iI2ZmZiIvPjwvZz48L3N2Zz4=");
  background-size: 18px;
  right: 0;
}

.w-lightbox-strip {
  white-space: nowrap;
  padding: 0 1vh;
  line-height: 0;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  overflow-x: auto;
  overflow-y: hidden;
}

.w-lightbox-item {
  width: 10vh;
  box-sizing: content-box;
  cursor: pointer;
  padding: 2vh 1vh;
  display: inline-block;
  -webkit-transform: translate3d(0, 0, 0);
}

.w-lightbox-active {
  opacity: .3;
}

.w-lightbox-thumbnail {
  height: 10vh;
  background: #222;
  position: relative;
  overflow: hidden;
}

.w-lightbox-thumbnail-image {
  position: absolute;
  top: 0;
  left: 0;
}

.w-lightbox-thumbnail .w-lightbox-tall {
  width: 100%;
  top: 50%;
  transform: translate(0, -50%);
}

.w-lightbox-thumbnail .w-lightbox-wide {
  height: 100%;
  left: 50%;
  transform: translate(-50%);
}

.w-lightbox-spinner {
  box-sizing: border-box;
  width: 40px;
  height: 40px;
  border: 5px solid rgba(0, 0, 0, .4);
  border-radius: 50%;
  margin-top: -20px;
  margin-left: -20px;
  animation: .8s linear infinite spin;
  position: absolute;
  top: 50%;
  left: 50%;
}

.w-lightbox-spinner:after {
  content: "";
  border: 3px solid rgba(0, 0, 0, 0);
  border-bottom-color: #fff;
  border-radius: 50%;
  position: absolute;
  top: -4px;
  bottom: -4px;
  left: -4px;
  right: -4px;
}

.w-lightbox-hide {
  display: none;
}

.w-lightbox-noscroll {
  overflow: hidden;
}

@media (min-width: 768px) {
  .w-lightbox-content {
    height: 96vh;
    margin-top: 2vh;
  }

  .w-lightbox-view, .w-lightbox-view:before {
    height: 96vh;
  }

  .w-lightbox-group, .w-lightbox-group .w-lightbox-view, .w-lightbox-group .w-lightbox-view:before {
    height: 84vh;
  }

  .w-lightbox-image {
    max-width: 96vw;
    max-height: 96vh;
  }

  .w-lightbox-group .w-lightbox-image {
    max-width: 82.3vw;
    max-height: 84vh;
  }

  .w-lightbox-left, .w-lightbox-right {
    opacity: .5;
    display: block;
  }

  .w-lightbox-close {
    opacity: .8;
  }

  .w-lightbox-control:hover {
    opacity: 1;
  }
}

.w-lightbox-inactive, .w-lightbox-inactive:hover {
  opacity: 0;
}

.w-richtext:before, .w-richtext:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-richtext:after {
  clear: both;
}

.w-richtext[contenteditable="true"]:before, .w-richtext[contenteditable="true"]:after {
  white-space: initial;
}

.w-richtext ol, .w-richtext ul {
  overflow: hidden;
}

.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-video div:after, .w-richtext .w-richtext-figure-selected[data-rt-type="video"] div:after, .w-richtext .w-richtext-figure-selected.w-richtext-figure-type-image div, .w-richtext .w-richtext-figure-selected[data-rt-type="image"] div {
  outline: 2px solid #2895f7;
}

.w-richtext figure.w-richtext-figure-type-video > div:after, .w-richtext figure[data-rt-type="video"] > div:after {
  content: "";
  display: none;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.w-richtext figure {
  max-width: 60%;
  position: relative;
}

.w-richtext figure > div:before {
  cursor: default !important;
}

.w-richtext figure img {
  width: 100%;
}

.w-richtext figure figcaption.w-richtext-figcaption-placeholder {
  opacity: .6;
}

.w-richtext figure div {
  color: rgba(0, 0, 0, 0);
  font-size: 0;
}

.w-richtext figure.w-richtext-figure-type-image, .w-richtext figure[data-rt-type="image"] {
  display: table;
}

.w-richtext figure.w-richtext-figure-type-image > div, .w-richtext figure[data-rt-type="image"] > div {
  display: inline-block;
}

.w-richtext figure.w-richtext-figure-type-image > figcaption, .w-richtext figure[data-rt-type="image"] > figcaption {
  caption-side: bottom;
  display: table-caption;
}

.w-richtext figure.w-richtext-figure-type-video, .w-richtext figure[data-rt-type="video"] {
  width: 60%;
  height: 0;
}

.w-richtext figure.w-richtext-figure-type-video iframe, .w-richtext figure[data-rt-type="video"] iframe {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.w-richtext figure.w-richtext-figure-type-video > div, .w-richtext figure[data-rt-type="video"] > div {
  width: 100%;
}

.w-richtext figure.w-richtext-align-center {
  clear: both;
  margin-left: auto;
  margin-right: auto;
}

.w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image > div, .w-richtext figure.w-richtext-align-center[data-rt-type="image"] > div {
  max-width: 100%;
}

.w-richtext figure.w-richtext-align-normal {
  clear: both;
}

.w-richtext figure.w-richtext-align-fullwidth {
  width: 100%;
  max-width: 100%;
  text-align: center;
  clear: both;
  margin-left: auto;
  margin-right: auto;
  display: block;
}

.w-richtext figure.w-richtext-align-fullwidth > div {
  padding-bottom: inherit;
  display: inline-block;
}

.w-richtext figure.w-richtext-align-fullwidth > figcaption {
  display: block;
}

.w-richtext figure.w-richtext-align-floatleft {
  float: left;
  clear: none;
  margin-right: 15px;
}

.w-richtext figure.w-richtext-align-floatright {
  float: right;
  clear: none;
  margin-left: 15px;
}

.w-nav {
  z-index: 1000;
  background: #ddd;
  position: relative;
}

.w-nav:before, .w-nav:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-nav:after {
  clear: both;
}

.w-nav-brand {
  float: left;
  color: #333;
  text-decoration: none;
  position: relative;
}

.w-nav-link {
  vertical-align: top;
  color: #222;
  text-align: left;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
  text-decoration: none;
  display: inline-block;
  position: relative;
}

.w-nav-link.w--current {
  color: #0082f3;
}

.w-nav-menu {
  float: right;
  position: relative;
}

[data-nav-menu-open] {
  text-align: center;
  min-width: 200px;
  background: #c8c8c8;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  overflow: visible;
  display: block !important;
}

.w--nav-link-open {
  display: block;
  position: relative;
}

.w-nav-overlay {
  width: 100%;
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  overflow: hidden;
}

.w-nav-overlay [data-nav-menu-open] {
  top: 0;
}

.w-nav[data-animation="over-left"] .w-nav-overlay {
  width: auto;
}

.w-nav[data-animation="over-left"] .w-nav-overlay, .w-nav[data-animation="over-left"] [data-nav-menu-open] {
  z-index: 1;
  top: 0;
  right: auto;
}

.w-nav[data-animation="over-right"] .w-nav-overlay {
  width: auto;
}

.w-nav[data-animation="over-right"] .w-nav-overlay, .w-nav[data-animation="over-right"] [data-nav-menu-open] {
  z-index: 1;
  top: 0;
  left: auto;
}

.w-nav-button {
  float: right;
  cursor: pointer;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  padding: 18px;
  font-size: 24px;
  display: none;
  position: relative;
}

.w-nav-button:focus {
  outline: 0;
}

.w-nav-button.w--open {
  color: #fff;
  background-color: #c8c8c8;
}

.w-nav[data-collapse="all"] .w-nav-menu {
  display: none;
}

.w-nav[data-collapse="all"] .w-nav-button, .w--nav-dropdown-open, .w--nav-dropdown-toggle-open {
  display: block;
}

.w--nav-dropdown-list-open {
  position: static;
}

@media screen and (max-width: 991px) {
  .w-nav[data-collapse="medium"] .w-nav-menu {
    display: none;
  }

  .w-nav[data-collapse="medium"] .w-nav-button {
    display: block;
  }
}

@media screen and (max-width: 767px) {
  .w-nav[data-collapse="small"] .w-nav-menu {
    display: none;
  }

  .w-nav[data-collapse="small"] .w-nav-button {
    display: block;
  }

  .w-nav-brand {
    padding-left: 10px;
  }
}

@media screen and (max-width: 479px) {
  .w-nav[data-collapse="tiny"] .w-nav-menu {
    display: none;
  }

  .w-nav[data-collapse="tiny"] .w-nav-button {
    display: block;
  }
}

.w-tabs {
  position: relative;
}

.w-tabs:before, .w-tabs:after {
  content: " ";
  grid-area: 1 / 1 / 2 / 2;
  display: table;
}

.w-tabs:after {
  clear: both;
}

.w-tab-menu {
  position: relative;
}

.w-tab-link {
  vertical-align: top;
  text-align: left;
  cursor: pointer;
  color: #222;
  background-color: #ddd;
  padding: 9px 30px;
  text-decoration: none;
  display: inline-block;
  position: relative;
}

.w-tab-link.w--current {
  background-color: #c8c8c8;
}

.w-tab-link:focus {
  outline: 0;
}

.w-tab-content {
  display: block;
  position: relative;
  overflow: hidden;
}

.w-tab-pane {
  display: none;
  position: relative;
}

.w--tab-active {
  display: block;
}

@media screen and (max-width: 479px) {
  .w-tab-link {
    display: block;
  }
}

.w-ix-emptyfix:after {
  content: "";
}

@keyframes spin {
  0% {
    transform: rotate(0);
  }

  100% {
    transform: rotate(360deg);
  }
}

.w-dyn-empty {
  background-color: #ddd;
  padding: 10px;
}

.w-dyn-hide, .w-dyn-bind-empty, .w-condition-invisible {
  display: none !important;
}

.wf-layout-layout {
  display: grid;
}

:root {
  --steel-blue: #3b99d9;
  --steel-blue-2: #2e80b6;
  --dark-khaki: #a8d069;
  --medium-sea-green: #30ad64;
  --light-sea-green: #25ccbf;
  --light-sea-green-2: #20ac99;
  --sandy-brown: #f8c740;
  --goldenrod: #e2a62b;
  --khaki: #face6a;
  --sandy-brown-2: #e4b962;
  --salmon: #fd7072;
  --indian-red: #cf404d;
  --tan: #d39f9a;
  --dim-gray: #735260;
  --indian-red-2: #af4173;
  --brown: #822e50;
  --tomato: #e64c40;
  --firebrick: #bf3a30;
  --salmon-2: #fc7d64;
  --white-smoke: #ecf0f1;
  --silver: #bec3c7;
  --dim-gray-2: #49647b;
  --dark-slate-gray: #2d3e4f;
  --dark-slate-gray-2: #404047;
  --white-smoke-2: #edeff2;
  --white-smoke-3: #f3f3f3;
  --lavender: #e9e9e9;
  --light-gray: #d4d4d4;
  --dim-gray-3: #5d5d5d;
  --dark-slate-gray-3: #333;
  --white-smoke-4: #f0f0f0;
  --dark-gray: #aaa;
}

body {
  color: #333;
  background-color: #f0f0f0;
  font-family: Lato, sans-serif;
  font-size: 14px;
  line-height: 135%;
}

h1 {
  margin-top: 0;
  margin-bottom: 15px;
  font-size: 35px;
  font-weight: 400;
  line-height: 40px;
}

h2 {
  margin-top: 30px;
  margin-bottom: 20px;
  font-size: 25px;
  font-weight: 400;
  line-height: 30px;
}

h3 {
  margin-top: 30px;
  margin-bottom: 20px;
  font-size: 21px;
  font-weight: 400;
  line-height: 30px;
}

h4 {
  margin-top: 0;
  margin-bottom: 15px;
  font-size: 18px;
  font-weight: 400;
  line-height: 22px;
}

h5 {
  text-transform: uppercase;
  margin-bottom: 20px;
  font-size: 14px;
  font-weight: 700;
  line-height: 20px;
}

h6 {
  margin-top: 0;
  margin-bottom: 15px;
  font-size: 14px;
  font-weight: 700;
  line-height: 20px;
}

p {
  margin-top: 0;
  margin-bottom: 20px;
  font-family: Lato, sans-serif;
  line-height: 160%;
}

a {
  color: #24a7ff;
  text-decoration: underline;
}

ul {
  margin-top: 0;
  margin-bottom: 20px;
  padding-left: 40px;
}

ol {
  margin-top: 0;
  margin-bottom: 10px;
  padding-left: 40px;
  font-family: Lato, sans-serif;
}

img {
  max-width: 100%;
  display: inline-block;
}

blockquote {
  border-left: 5px solid #e2e2e2;
  margin-bottom: 10px;
  padding: 10px 20px;
  font-size: 16px;
  line-height: 135%;
}

figure {
  margin-bottom: 20px;
}

figcaption {
  color: #aaa;
  text-align: center;
  margin-top: 5px;
  font-size: 13px;
}

.button {
  color: #fff;
  text-align: center;
  background-color: #888;
  border-radius: 3px;
  padding: 11px 20px;
  font-size: 16px;
  line-height: 20px;
  text-decoration: none;
  transition: background-color .2s;
  display: inline-block;
}

.button:hover {
  background-color: #333;
}

.button.w--current {
  background-color: #2e80b6;
}

.navigation-link {
  color: #aaa;
  margin-left: 25px;
  padding: 15px 0;
  font-size: 14px;
}

.navigation-link:hover, .navigation-link.w--current {
  color: #333;
}

.navigation-bar {
  background-color: #fff;
  padding-top: 15px;
  padding-bottom: 15px;
  box-shadow: 0 1px rgba(0, 0, 0, .06);
}

.section {
  background-color: #fff;
  padding-top: 63px;
  padding-bottom: 63px;
  position: relative;
}

.section.accent {
  background-color: #f3f3f3;
}

.section.dark {
  color: #fff;
  background-color: #5d5d5d;
}

.social-button {
  background-color: #000;
  border-radius: 100px;
  margin-bottom: 8px;
  margin-left: 4px;
  margin-right: 4px;
  padding: 8px;
  transition: opacity .3s;
}

.social-button:hover {
  opacity: .7;
}

.social-button.border {
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid rgba(0, 0, 0, .36);
  padding: 6px;
}

.social-button.facebook {
  background-color: #3c5791;
}

.social-button.twitter {
  background-color: #29a9e8;
}

.social-button.red {
  background-color: #d11529;
}

.social-button.pink {
  background-color: #fc488f;
}

.social-button.pink2 {
  background-color: #ed1081;
}

.social-button.orange {
  background-color: #db4e34;
}

.social-button.vimeo {
  background-color: #1ebae7;
}

.social-button.linkdin {
  background-color: #1485c3;
}

.social-button.instagram {
  background-color: #4b769b;
}

.social-button.tumblr {
  background-color: #2e5270;
}

.social-button.webflow {
  background-color: #3278bd;
}

.social-button.medium {
  background-color: #549f63;
}

.social-icon-link {
  width: 20px;
  opacity: .36;
  margin-right: 12px;
  transition: opacity .2s;
}

.social-icon-link:hover {
  opacity: .9;
}

.grey-rule {
  width: 90px;
  height: 1px;
  background-color: #c7c7c7;
  margin-top: 15px;
  margin-bottom: 15px;
}

.site-name {
  color: #333;
  margin-top: 11px;
  font-size: 24px;
  line-height: 100%;
  text-decoration: none;
  display: block;
}

.site-name.w--current {
  font-family: PT Serif, serif;
  font-weight: 700;
}

.site-description {
  text-align: left;
  margin-bottom: 20px;
  line-height: 145%;
}

.built-with-webflow {
  color: #aaa;
  text-align: left;
  letter-spacing: 1.2px;
  text-transform: uppercase;
  margin-bottom: 0;
  font-size: 10px;
}

.webflow-link {
  color: #aaa;
  text-decoration: none;
}

.webflow-link:hover {
  color: #333;
}

.post-wrapper {
  background-color: #fff;
  border-radius: 5px;
  margin-bottom: 30px;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, .06);
}

.blog-image {
  height: 180px;
  background-image: url("https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg");
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: cover;
  border-radius: 3px;
  margin-right: 20px;
  transition: opacity .2s;
  display: block;
}

.blog-image:hover {
  opacity: .8;
}

.post-content {
  padding: 20px;
}

.post-summary {
  color: #aaa;
  font-size: 14px;
  line-height: 22px;
  display: inline;
}

.post-info {
  color: #aaa;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin-right: 8px;
  font-size: 10px;
  line-height: 18px;
  display: inline-block;
}

.post-info.when-link {
  text-decoration: none;
}

.post-info.when-link:hover {
  color: #333;
}

.blog-title-link {
  color: #333;
  text-decoration: none;
  transition: opacity .2s;
}

.blog-title-link:hover {
  opacity: .8;
}

.body-copy img {
  border-radius: 3px;
}

.body-copy li {
  margin-bottom: 3px;
}

.body-copy blockquote {
  line-height: 145%;
}

.body-copy figure {
  margin-bottom: 20px;
}

.success-message {
  background-color: #f0f0f0;
  border-radius: 3px;
  padding-top: 49px;
  padding-bottom: 49px;
}

.success-text {
  margin-bottom: 0;
  font-size: 17px;
}

.text-field {
  border-radius: 3px;
  margin-bottom: 15px;
}

.text-field.text-area {
  min-height: 110px;
}

.social-link-group {
  margin-bottom: 10px;
}

.read-more-link {
  color: #aaa;
  margin-left: 8px;
  font-family: Lato, sans-serif;
  font-size: 14px;
  line-height: 22%;
  text-decoration: underline;
  transition: color .2s;
  display: inline;
}

.read-more-link:hover {
  color: #333;
}

.content-wrapper {
  width: 100%;
  grid-column-gap: 0px;
  grid-row-gap: 200px;
  object-fit: fill;
  flex-wrap: nowrap;
  grid-template-rows: auto auto;
  grid-template-columns: 1fr;
  grid-auto-columns: 1fr;
  align-content: space-around;
  margin-left: auto;
  margin-right: auto;
  padding-top: 30px;
  padding-bottom: 50px;
  display: inline-block;
  position: static;
}

.blog-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 22px;
  line-height: 26px;
}

.white-wrapper {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, .06);
}

.circle-profile {
  width: 70%;
  border-radius: 500px;
  margin-bottom: 28px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}

.small-heading {
  text-align: left;
  margin-top: 0;
  margin-bottom: 15px;
  font-size: 14px;
  line-height: 135%;
}

.small-post-link {
  color: #aaa;
  text-align: left;
  margin-bottom: 15px;
  text-decoration: none;
  display: inline-block;
}

.small-post-link:hover {
  color: #333;
}

.feature-posts-list {
  margin-bottom: -15px;
}

.white-bg-heading {
  background-color: #fff;
  border-radius: 5px;
  margin-bottom: 30px;
  padding: 14px;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, .06);
}

.content-column {
  aspect-ratio: auto;
  padding-left: 20px;
}

.blog-page-image {
  height: 290px;
  background-image: url("https://d3e54v103j8qbb.cloudfront.net/img/background-image.svg");
  background-position: 50%;
  background-repeat: no-repeat;
  background-size: cover;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.sidebar-on-mobile {
  padding-top: 40px;
  display: none;
}

.details-wrapper {
  margin-top: 8px;
  margin-bottom: 8px;
}

.container {
  aspect-ratio: auto;
  object-fit: fill;
}

.container-2 {
  display: inline-block;
}

.columns {
  flex-flow: row;
  display: flex;
}

@media screen and (max-width: 991px) {
  .navigation-link {
    text-align: center;
  }

  .navigation-bar {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .navigation-menu {
    background-color: #fff;
    border-bottom: 1px solid #ddd;
  }

  .site-name {
    margin-top: 13px;
  }

  .post-wrapper {
    margin-bottom: 20px;
  }

  .blog-image {
    height: 140px;
  }

  .content-wrapper {
    padding: 20px;
  }

  .white-wrapper {
    padding: 14px;
  }

  .menu-button {
    padding: 15px;
  }

  .white-bg-heading {
    margin-bottom: 20px;
  }

  .content-column {
    padding-left: 10px;
  }

  .blog-page-image {
    height: 240px;
  }
}

@media screen and (max-width: 767px) {
  .navigation-bar {
    padding-top: 10px;
    padding-left: 10px;
    padding-right: 10px;
  }

  .grey-rule {
    margin-top: 21px;
    margin-bottom: 21px;
  }

  .built-with-webflow {
    margin-bottom: 0;
  }

  .post-wrapper {
    margin-bottom: 20px;
    margin-left: 0;
  }

  .blog-image {
    margin-bottom: 20px;
    margin-right: 0;
  }

  .post-content {
    padding: 20px;
  }

  .button-wrapper {
    text-align: center;
  }

  .content-wrapper {
    width: 100%;
    margin-left: 0;
    padding: 20px 10px;
  }

  .blog-title {
    font-size: 27px;
    line-height: 36px;
  }

  .white-wrapper {
    margin-top: 20px;
    padding: 34px;
  }

  .blog-page-image {
    height: 220px;
  }

  .sidebar-on-mobile {
    padding-top: 0;
    display: block;
  }
}

@media screen and (max-width: 479px) {
  h1 {
    font-size: 32px;
    line-height: 36px;
  }

  .blog-image {
    height: 190px;
  }

  .blog-title {
    font-size: 26px;
    line-height: 32px;
  }

  .white-wrapper {
    padding: 20px;
  }

  .blog-page-image {
    height: 210px;
  }
}


    </style>
</head>
<body class="js">

	{{-- <!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	@include('layouts.notification')
	<!-- Header -->
	@include('layouts.header') --}}
	<!--/ End Header -->
	@yield('main-content')

	{{-- @include('layouts.footer') --}}

</body>
</html>