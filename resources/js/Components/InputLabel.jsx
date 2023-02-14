export default function InputLabel({ forInput, value, className, children }) {
    return (
        <label htmlFor={forInput} className={`block font-medium text-normal text-gray-700 ` + className}>
            {value ? value : children}
        </label>
    );
}
