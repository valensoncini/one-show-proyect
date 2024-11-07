 an array of names. */
    transaction(storeNames: string | Iterable<string>, mode?: IDBTransactionMode, options?: IDBTransactionOptions): IDBTransaction;
}

interface IDBObjectStore {
    /**
     * Creates a new index in store with the given name, keyPath and options and returns a new IDBIndex. If the keyPath and options define constraints that cannot be satisfied with the data already in store the upgrade transaction will abort with a "ConstraintError" DOMException.
     *
     * Throws an "InvalidStateError" DOMException if not called within an upgrade transaction.
     */
    createIndex(name: string, keyPath: string | Iterable<string>, options?: IDBIndexParameters): IDBIndex;
}

interface MediaKeyStatusMap {
    [Symbol.iterator](): IterableIterator<[BufferSource, MediaKeyStatus]>;
    entries(): IterableIterator<[BufferSource, MediaKeyStatus]>;
    keys(): IterableIterator<BufferSource>;
    values(): IterableIterator<MediaKeyStatus>;
}

interface MediaList {
    [Symbol.iterator](): IterableIterator<string>;
}

interface MessageEvent<T = any> {
    /** @deprecated */
    initMessage