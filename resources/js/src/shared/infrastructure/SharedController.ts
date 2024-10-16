import { Html } from 'laravel-ts-utilities';

export default class SharedController
{
    compare()
    {
        // Fragmentos HTML A y B para comparar
        /*const htmlA = `
<ul id="dropdown-pages" class="hidden py-2 space-y-2">
    <li>
        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Settings</a>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kanban</a>
    </li>
    <li>
        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendar</a>
    </li>
</ul>
`;

        const htmlB = `
<ul id="dropdown-pages" class="hidden space-y-2 py-2">
    <li>
        <a href="#" class="group flex w-full items-center rounded-lg p-2 pl-11 text-base font-medium text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Settings</a>
    </li>
    <li>
        <a href="#" class="group flex w-full items-center rounded-lg p-2 pl-11 text-base font-medium text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kanban</a>
    </li>
    <li>
        <a href="#" class="group flex w-full items-center rounded-lg p-2 pl-11 text-base font-medium text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendar</a>
    </li>
</ul>
`;*/

        const $btn = document.getElementById('compareHtml');
        const $a = document.querySelector<HTMLTextAreaElement>('#textarea-a');
        const $b = document.querySelector<HTMLTextAreaElement>('#textarea-b');
        const $resultOk = document.getElementById('result-ok');
        const $resultNok = document.getElementById('result-nok');
        if ($a == null || $b == null || $resultOk == null || $resultNok == null) {
            throw new Error('Alguno de los elementos HTML de la pagina no se ha encontrado.');
        }
        const hideMessages = () => {
            $resultOk.classList.add('hidden');
            $resultNok.classList.add('hidden');
        };
        $a.addEventListener('focus', hideMessages);
        $b.addEventListener('focus', hideMessages);
        $btn?.addEventListener('click', e=> {
            hideMessages();
            const htmlA = $a.value;
            const htmlB = $b.value;
            if (Html.compareHTMLElementsStructure(htmlA, htmlB)) {
                $resultOk.classList.remove('hidden');
            } else {
                $resultNok.classList.remove('hidden');
            }
        });
    }
}
