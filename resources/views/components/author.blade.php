<div class="mb-10 sm:text-center">
    <a href="{{ setting('contact.telegram_profile') }}" aria-label="{{ setting('contact.telegram_role_name') }}" class="inline-block mb-1" target="_blank">
        <img alt="avatar"
             src="/founder_photo.jpeg"
             class="object-cover w-10 h-10 rounded-full shadow-sm"/>
    </a>
    <div>
        <a href="{{ setting('contact.telegram_profile') }}" aria-label="{{ setting('contact.telegram_role_name') }}" target="_blank"
           class="font-semibold text-gray-800 transition-colors duration-200 hover:text-green-700">{{ setting('contact.telegram_username') }}</a>
        <p class="text-sm font-medium leading-4 text-gray-600">{{ setting('contact.telegram_role_name') }}</p>
    </div>
</div>
