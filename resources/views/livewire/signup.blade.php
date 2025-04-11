<div class="bg-white rounded-xl shadow p-8 flex flex-col gap-6 min-w-[35rem]">
    <div>
        <h2 class="text-3xl font-bold mb-1">Let's start your journey!</h2>
        <span class="text-lg pb-2 text-slate-600">Sign up for a new account</span>
    </div>

    <hr class="w-[75%]">

    <label class="flex flex-col gap-2">
        Email
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Confirm password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <div class="flex justify-between items-center pt-4">
        <div class="flex justify-start items-center gap-2 text-sm">
            <input type="checkbox" class="border">

            <span>I agree to the</span>

            <div x-data="{ open: false }">
                <span x-on:click="open = true">
                    <button tyê="button" class="underline text-blue-500">
                        terms of service.
                    </button>
                </span>

                <div
                    x-dialog
                    x-model="open"
                    style="display: none"
                    class="fixed inset-0 overflow-y-auto z-10 text-left pt-[30%] sm:pt-0"
                >
                    <!-- Overlay -->
                    <div x-dialog:overlay x-transition:enter.opacity class="fixed inset-0 bg-black/25"></div>

                    <!-- Panel -->
                    <div class="relative min-h-full flex justify-center items-end sm:items-center p-0 sm:p-4">
                        <div
                            x-dialog:panel
                            x-transition.in
                            class="relative max-w-xl w-full bg-white rounded-t-xl sm:rounded-b-xl shadow-lg overflow-hidden"
                        >
                            <!-- Mobile: Top "grab" handle... -->
                            <div
                                class="sm:hidden absolute top-[-10px] left-0 right-0 h-[50px]"
                                x-data="{ startY: 0, currentY: 0, moving: false, get distance() { return this.moving ? Math.max(0, this.currentY - this.startY): 0 } }"
                                x-on:touchstart="moving = true; startY = currentY = $event.touches[0].clientY"
                                x-on:touchmove="currentY = $event.touches[0].clientY"
                                x-on:touchend="if (distance > 100) $dialog.close(); moving = false;"
                                x-effect="$el.parentElement.style.transform = 'translateY('+distance+'px)'"
                            >
                                <div class="flex justify-center pt-[12px]">
                                    <div class="bg-gray-400 rounded-full w-[10%] h-[5px]"></div>
                                </div>
                            </div>

                            <!-- Close Button -->
                            <div class="absolute top-0 right-0 pt-4 pr-4">
                                <button type="button" x-on:click="$dialog.close()" class="bg-gray-50 rounded-lg p-2 text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2">
                                    <span class="sr-only">Close modal</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Panel -->
                            <div class="p-8">
                                <h2 class="text-2xl font-bold text-slate-900">Terms Of Service</h2>

                                <div class="mt-5 text-gray-600">
                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Acceptance of Terms</h3>
                                    <p class="mt-2">By signing up for and using this sweet app, you agree to be bound by these Terms of Service ("Terms"). If you do not agree with these Terms, please do not use the Service.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Changes to Terms</h3>
                                    <p class="mt-2">We reserve the right to update and change the Terms at any time without notice. Continued use of the Service after any changes shall constitute your consent to such changes.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Use of the Service</h3>
                                    <p class="mt-2">You must provide accurate and complete registration information when you sign up. You are responsible for maintaining the confidentiality of your password and are solely responsible for all activities resulting from its use.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">User Content</h3>
                                    <p class="mt-2">You are responsible for all content and data you provide or upload to the Service. We reserve the right to remove content deemed offensive, illegal, or in violation of these Terms or any other policy.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Limitation of Liability</h3>
                                    <p class="mt-2">The Service is provided "as is". We make no warranties, expressed or implied, and hereby disclaim all warranties, including without limitation, implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Termination</h3>
                                    <p class="mt-2">We reserve the right to suspend or terminate your account at any time for any reason, with or without notice.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Governing Law</h3>
                                    <p class="mt-2">These Terms shall be governed by the laws of the land of fairy tale creatures, without respect to its conflict of laws principles.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Miscellaneous</h3>
                                    <p class="mt-2">If any provision of these Terms is deemed invalid or unenforceable, the remaining provisions shall remain in effect.</p>

                                    <h3 class="font-bold text-lg text-slate-800 mt-4">Contact</h3>
                                    <p class="mt-2">For any questions regarding these Terms, please contact us at dontcontactus@ever.com.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="w-1/2 text-center rounded-xl bg-blue-500 text-white px-3 py-2 font-medium">Register</button>
    </div>
</div>
