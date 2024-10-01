type Constructor<T = {}> = new (...args: any[]) => T;

export default class Instantiable
{
    // Método estático para instanciar clases hijas
    static new<T extends Constructor>(this: T, ...args: ConstructorParameters<T>): InstanceType<T> {
        return new this(...args) as InstanceType<T>;
    }
}
