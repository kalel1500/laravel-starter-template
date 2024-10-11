
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

    static compareHTMLElementsStructure(htmlA: string, htmlB: string) {
        // Función auxiliar para obtener los atributos de un elemento como un objeto
        function getAttributesMap(element: Element) {
            const attributes: Record<any, any> = {};
            for (const attr of element.attributes) {
                // Si el atributo es 'class', ordenamos las clases
                if (attr.name === 'class') {
                    attributes[attr.name] = attr.value.split(' ').sort().join(' ').trim();
                } else {
                    attributes[attr.name] = attr.value.trim();
                }
            }
            return attributes;
        }

        // Función auxiliar para comparar dos objetos de atributos
        function compareAttributes(attrsA: Record<any, any>, attrsB: Record<any, any>) {
            const keysA = Object.keys(attrsA);
            const keysB = Object.keys(attrsB);

            // Comparar la cantidad de atributos
            if (keysA.length !== keysB.length) return false;

            // Comparar cada atributo y su valor
            return keysA.every(key => attrsA[key] === attrsB[key]);
        }

        // Función recursiva para comparar dos elementos y su estructura
        function compareElements(elementA: Element, elementB: Element) {
            // Comparar las etiquetas
            if (elementA.tagName !== elementB.tagName) return false;

            // Comparar los atributos
            const attrsA = getAttributesMap(elementA);
            const attrsB = getAttributesMap(elementB);
            if (!compareAttributes(attrsA, attrsB)) return false;

            // Comparar la cantidad de hijos
            const childrenA = elementA.children;
            const childrenB = elementB.children;
            if (childrenA.length !== childrenB.length) return false;

            // Comparar recursivamente los hijos
            for (let i = 0; i < childrenA.length; i++) {
                if (!compareElements(childrenA[i], childrenB[i])) return false;
            }

            return true;
        }

        // Función para obtener el primer elemento del HTML
        function getRootElement(htmlString: string) {
            const parser = new DOMParser();
            const doc = parser.parseFromString(htmlString, 'text/html');
            return doc.body.firstElementChild; // Obtener el primer elemento del body
        }

        // Obtener los elementos raíz de ambos fragmentos HTML
        const rootA = getRootElement(htmlA);
        const rootB = getRootElement(htmlB);

        // Verificar que ambos elementos raíz existan
        if (!rootA || !rootB) return false;

        // Comparar las estructuras de los dos elementos raíz
        return compareElements(rootA, rootB);
    }
}