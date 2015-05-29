# cookielaw-ga
Cookielaw repo only for activate google analytics after click on ok button.

<h1>HOW TO USE</h1>
<code>
  <script src="common/js/cookiechoices.js"></script>
  	<script>
    document.addEventListener('DOMContentLoaded', function(event) {
      cookieChoices.showCookieConsentBar('text of cookie acceptation',
        'ok button', 'policy button', 'http://example.com');
    });
  </script>
</code>
for cookiechoices.js (original)

 Copyright 2014 Google Inc. All rights reserved.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
