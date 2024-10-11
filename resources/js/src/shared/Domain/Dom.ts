
export default class Dom
{
    static compareTailwindClassesHTML(htmlA: string, htmlB: string) {
        // Función auxiliar para extraer las clases de un string de clases
        function extractClassesFromElement(element: Element) {
            const classList = element.getAttribute('class');
            return classList ? classList.split(' ').sort().join(' ') : '';
        }

        // Función para obtener un array de clases ordenadas de todos los elementos del HTML
        function getSortedClassesArray(htmlString: string) {
            const parser = new DOMParser();
            const doc = parser.parseFromString(htmlString, 'text/html');
            const allElements = doc.querySelectorAll('*'); // Selecciona todos los elementos
            return Array.from(allElements).map(extractClassesFromElement);
        }

        // Obtener las clases de ambos fragmentos HTML
        const classesA = getSortedClassesArray(htmlA);
        const classesB = getSortedClassesArray(htmlB);

        // Comparar ambos arrays de clases
        if (classesA.length !== classesB.length) return false;
        return classesA.every((classA, index) => classA === classesB[index]);
    }
}
