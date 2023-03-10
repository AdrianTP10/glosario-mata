export default function InputLabel({ forInput, value, className, children }) {
    return (
        <label htmlFor={forInput} className={`block font-medium text-lg text-gray-800 ` + className}>
            {value ? value : children}
        </label>
    );
}
